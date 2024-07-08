<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobRole;
use App\Models\Agency;
use App\Models\Country;
use App\Models\JobRecruitment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Job_recruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job_recruitments = JobRecruitment::with('job_roles', 'agencies', 'countries')->get(); 
        $job_roles = JobRole::all();
        $agencies = Agency::all();
        $countries = Country::all();
        return view('job_recruitment.index', compact('job_recruitments','job_roles','agencies','countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $job_roles = JobRole::all();
        $agencies = Agency::all();
        $countries = Country::all();
        
        return view('job_recruitment.index', compact('job_roles', 'agencies', 'countries'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {     
    
        $job_recruitments = new JobRecruitment;
        $job_recruitments->no_of_vacancy = $request->no_of_vacancy;
        $job_recruitments->deadline = $request->deadline;
        $job_recruitments->job_role_id = $request->job_role_id;
        $job_recruitments->agency_id = $request->agency_id;
        $job_recruitments->country_id = $request->country_id;
        $job_recruitments->save();
        
 return redirect()->route('job_recruitment.index')->with('success', 'Job Recruitment created successfully.');

          // return view('job_recruitment', compact('job_recruitments',));
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
    public function edit(JobRecruitment $job_recruitment)
    {
        return view('job_recruitment',compact('job_recruitment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobRecruitment $job_recruitment)
    {
        $job_recruitment->update($request->all());

        return redirect()->route('job_recruitment');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(JobRecruitment $job_recruitment)
    {
        $job_recruitment->delete();

        return redirect()->route('job_recruitment.index')->with('success', 'Job Recruitment deleted successfully.');
    }
}
