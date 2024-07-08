<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobRole;

class JobroleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job_roles=JobRole::all();
        return view('job_role',compact('job_roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job_role');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JobRole::create($request->all());
        
        return redirect()->route('job_role')
                        ->with('success',' created successfully.');
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
