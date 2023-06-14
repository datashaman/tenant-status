<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVentureRequest;
use App\Http\Requests\UpdateVentureRequest;
use App\Models\Venture;

class VentureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventures = Venture::all();

        return view('ventures.index', ['ventures' => $ventures]);
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
    public function store(StoreVentureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Venture $venture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venture $venture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVentureRequest $request, Venture $venture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venture $venture)
    {
        //
    }
}
