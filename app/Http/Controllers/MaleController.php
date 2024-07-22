<?php

namespace App\Http\Controllers;

use App\Models\Male;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\http\Controllers\confirmDelete;

class MaleController extends Controller
{
    public $male;
    public $user;

    public function __construct()
    {
        $this->male = new Male();
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $males = Male::with('user')->latest()->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.page.user.male.index', compact('males'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.page.user.male.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // Controller method
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'city' => 'required',
            'number_tlp' => 'required|min:10|max:15',
            'motivation' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $user = User::find($request->input('user_id'));
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        // Check if the user ID is already associated with an existing Male model
        $existingMale = Male::where('user_id', $request->input('user_id'))->first();
        if ($existingMale) {
            return redirect()->route('male.index')->with([
                'warning' => 'User data already exists. You can only update the existing data.',
            ])->withInput();
        }

        $male = new Male();
        $male->user_id = $request->input('user_id');
        $male->city = $request->input('city');
        $male->number_tlp = $request->input('number_tlp');
        $male->motivation = $request->input('motivation');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/male'), $imageName);
            $male->image = $imageName;
        }

        $male->save();

        return redirect()->route('male.index')->with('success', 'Data Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $male = Male::find($id);
        $user = User::find($male->user_id);

        return view('admin.page.user.male.show', compact('male', 'user'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $male = Male::find($id);
        return view('admin.page.user.male.edit', compact('male'));
    }


    public function update(Request $request, $maleId)
    {
        $male = Male::findOrFail($maleId);

        $request->validate([
            'number_tlp' => 'required|min:10|max:15',
            'city' => 'required',
            'motivation' => 'required|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image file
            if ($male->image) {
                Storage::delete('public/images/males', $male->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/male'), $imageName);

            $male->update([
                'image' => $imageName,
                'number_tlp' => $request->input('number_tlp'),
                'city' => $request->input('city'),
                'motivation' => $request->input('motivation'),
            ]);
        } else {
            $male->update([
                'number_tlp' => $request->input('number_tlp'),
                'city' => $request->input('city'),
                'motivation' => $request->input('motivation'),
            ]);
        }

        return redirect()->route('male.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $male = Male::findOrFail($id);
        $male->delete();

        return redirect()->route('male.index')->with(['success' => 'Data Deleted Successfully!']);
    }
}
