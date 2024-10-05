<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reference;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the data.
     */
    public function index()
    {
        $references = Reference::whereNull('parent_id')->with('children')->get();
        // dd($references->toArray());
        return view('references.index', compact('references'));
    }

    /**
     * Show the form for creating a new data.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created data in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified data.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified data.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified data in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified data from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
