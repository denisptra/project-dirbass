<?php

namespace App\Http\Controllers;

use App\Models\Creation;
// use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creation = Creation::orderBy('created_at')->first();
        $creationn = Creation::all();
        return view('user.page.karya.index', compact('creation', 'creationn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $creation = Creation::findOrFail($id);
        return view('user.page.karya.show', compact('creation'));

    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Karya $karya)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Karya $karya)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Karya $karya)
    // {
    //     //
    // }
}
