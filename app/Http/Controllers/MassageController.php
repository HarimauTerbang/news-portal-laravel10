<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Http\Requests\StoreMassageRequest;
use App\Http\Requests\UpdateMassageRequest;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMassageRequest $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'phone' => 'required|max:12',
            'message' => 'required|max:255',
        ]);

        Massage::create($validatedData);

        return redirect('/')->with('success', 'Pesan berhasil terkirim, Tunggu balasan dari kami melalui Email / nomer handphone yang ada kirimkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Massage $massage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Massage $massage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMassageRequest $request, Massage $massage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Massage $massage)
    {
        //
    }
}
