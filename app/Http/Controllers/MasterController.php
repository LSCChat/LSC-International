<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobRole;
use App\Models\Agency;
use App\Models\Country;
use App\Models\UserDetail;
use App\Models\Company;
use App\Models\Role;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $job_roles = JobRole::all();
        $agencies = Agency::all();
        $countries = Country::all();
        // $companies = Company::all();
        $user_details= UserDetail::all();

        return view('master.index', compact('roles','job_roles','agencies','countries','user_details'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function jobRolestore(Request $request)
    {
        JobRole::create($request->all());
             
        return view('master.index');
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
    public function jobRoleDestroy(JobRole $job_role)
    {
        if ($job_role) {
            $job_role->delete();
            return view('master.index');
        } else {
            return response()->json(['error' => 'Batch not found'], 404);
        }
    }   
                //AGENCY
    public function agencyIndex(Agency $agencies)
    {
        $agencies = Agency::all();
        return view('master.index',compact('agencies'));
    }

    public function agencyStore(Request $request)
    {
        Agency::create($request->all());
             
        return view('master.index');
                        
    }
    public function agencyDestroy(Agency $agency)
    {
        if ($agency) {
            $agency->delete();
            return view('master.index');
        } else {
            return response()->json(['error' => 'College not found'], 404);
        }
    }

              //COUNTRY
    public function countryIndex(Country $countries)
    {
        $countries=Country::all();
        return view('master.index',compact('countries'));       
    }
    public function countryStore(Request $request)
    {
       Country::create($request->all());
             
        return view('master.index');
                        
    }
    public function countryDestroy(Country $country)
    {
        if ($country) {
            $country->delete();
            return view('master.index');
        } else {
            return response()->json(['error' => 'Country not found'], 404);
        }
    }

            //ROLE
    public function roleIndex(Role $roles)
    {
        $roles=Role::all();
        return view('master.index',compact('roles'));       
    }
    public function roleStore(Request $request)
    {
       Role::create($request->all());
             
        return view('master.index');
                        
    }
    public function roleDestroy(Role $role)
    {
        if ($role) {
            $role->delete();
            return view('master.index');
        } else {
            return response()->json(['error' => 'Country not found'], 404);
        }
    }
    public function UserdetailIndex(UserDetail $user_details)
    {
        $user_details=UserDetail::all();
        return view('master.index',compact('user_details'));       
    }
    public function UserdetailStore(Request $request)
    {
       UserDetail::create($request->all());
             
        return view('master.index');
                        
    }
    public function UserdetailDestroy(UserDetail $user_detail)
    {
        if ($user_detail) {
            $user_detail->delete();
            return view('master.index');
        } else {
            return response()->json(['error' => 'Country not found'], 404);
        }
    }
}
