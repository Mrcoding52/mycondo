<?php

namespace App\Http\Controllers;

use App\Models\properties;
use App\Models\services;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $properties = properties::paginate(10);        $services = services::paginate(10);        return view('dashboard', compact('properties', 'services'));
=======
        $properties = properties::all();
        $services = services::all();
        return view('dashboard', compact('properties', 'services'));
>>>>>>> ef4c22462ca54af1a2d1e0cac7592c8e2157283f
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
