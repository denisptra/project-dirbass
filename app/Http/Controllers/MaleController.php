<?php

namespace App\Http\Controllers;

use App\Models\Male;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'city' => 'required',
            'number_tlp' => 'required',
            'motivation' => 'required',
        ]);

        $user = User::find($request->input('user_id'));
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }

        $male = new Male();
        $male->user_id = $request->input('user_id');
        $male->city = $request->input('city');
        $male->number_tlp = $request->input('number_tlp');
        $male->motivation = $request->input('motivation');
        $male->save();

        return redirect()->route('male.index')->with('success', 'Data added successfully!');
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
    public function edit($maleId)
    {
        $male = Male::findOrFail($maleId);
        $user = User::findOrFail($male->user_id);

        return view('admin.page.user.male.edit', compact('male', 'user'));
    }


    public function update(Request $request, $maleId)
    {
        $male = Male::findOrFail($maleId);
        $user = User::findOrFail($male->user_id); 

        $male->number_tlp = $request->input('number_tlp');
        $male->city = $request->input('city');
        $male->motivation = $request->input('motivation');

        $user->name = $request->input('name');

        $male->save();
        $user->save();

        return redirect()->route('male.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $male = Male::findOrFail($id);
        $male->delete();

        return redirect()->route('male.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
