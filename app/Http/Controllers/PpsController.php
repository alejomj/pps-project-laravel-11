<?php

namespace App\Http\Controllers;

use App\Models\Pps;
use Illuminate\Http\Request;

class PpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pps.index', ['ppspps' => Pps::latest()->get()]); //ordeby('created_at', 'desc')
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
        $validated = $request->validate([
            'message' => ['required', 'min:3', 'max:255'],
        ]);

        $request->user()->ppspps()->create($validated);
        // session()->flash('status');

        return to_route('pps.index')->with('status','Pps sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pps $pps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pps $pps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pps $pps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pps $pps)
    {
        //
    }
}
