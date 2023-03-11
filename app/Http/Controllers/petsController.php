<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'pet.index',
            [
                'pets' => Pet::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Pet $pet, Request $request)
    {
        $pet->tipo = $request->tipo;
        $pet->nombre = $request->nombre;
        $pet->identificador = $request->identificador;

        $pet->save();

        return  redirect()->route('pet.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
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
    public function destroy(Pet $pet)
    {
        $pet->delete();

        return redirect()->route('pet.index');
    }
}