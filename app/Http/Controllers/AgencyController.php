<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agency;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencies=Agency::all();
        return view('agency', compact('agencies'));   
         }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agency');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Agency::create($request->all());
        
        return redirect()->route('agency')
                        ->with('success',' created successfully.');    }

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
