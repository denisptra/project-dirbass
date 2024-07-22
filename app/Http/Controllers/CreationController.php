<?php

namespace App\Http\Controllers;

use App\Models\Creation;
use Illuminate\Http\Request;
use App\Models\User;




class CreationController extends Controller
{
    public $creation;
    public function __construct()
    {
        $this->creation = new Creation();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creations = Creation::with('author')->get();
        $title = 'Delete News   !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.page.creation.index', compact('creations'));
    }



    public function create()
    {
        $users = User::all();
        return view('admin.page.creation.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'author_id' => 'required|exists:users,id',
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Save creation
        $creation = new Creation();
        $creation->title = $request->title;
        $creation->description = $request->description;
        $creation->author_id = $request->author_id; // Set the author_id property
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('storage/', $imageName);

            $creation->image = $imageName;
        }

        $creation->save();

        return redirect()->route('creation.index')->with('success', 'Creation added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $creation = Creation::with('author')->findOrFail($id);
        return view('admin.page.creation.show', compact('creation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $creation = Creation::findOrFail($id);
        $users = User::all();
        return view('admin.page.creation.edit', compact('creation', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:10',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
            'author_id' => 'required|exists:users,id',
        ]);

        $creation = Creation::findOrFail($id);
        $creation->title = $request->title;
        $creation->description = $request->description;

        if ($request->hasFile('image')) {
            // Menghandle upload image baru
            $imagePath = $request->file('image')->store('uploads', 'public');
            $creation->image = $imagePath;
        }

        $creation->author_id = $request->author_id;
        $creation->save();

        return redirect()->route('creation.index')->with('success', 'Creation updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Creation $creation)
    {
        $creation->delete();
        return redirect()->route('creation.index')->with(['success' => 'Creation Deleted Successfully!']);
    }
}
