@extends('navbar')
@section('content')
<style>
    .box {
        width: 90%;
        box-shadow: 1px 2px 3px gray;
        background-color: white;
        border-radius: 7px;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 0 auto; /* Center the box */
    }

    .box .header {
        width: 100%;
        text-align: left;
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 20px;
        color: #D20062;
        border-bottom:1px solid #D20062;
        /* box-shadow: 0px 0px 3px gray; */
        padding:10px;
       
        
    }

    .box .input-group {
        flex: 1 1 calc(33.33% - 20px); /* Adjust the width for three columns */
        box-sizing: border-box; /* Ensure padding and border are included in width calculation */
    }

    .box label {
        display: block;
        margin-bottom: 5px;
/*        color:#38419D;*/
color: #686D76;
        /* font-weight: bold; */
    }

    .box input, .box select {
        width: 100%;
        padding: 8px; /* Smaller padding for smaller fields */
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .box .submit-container {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }

    .box button {
        padding: 8px 16px; /* Smaller padding for smaller button */
        border: none;
        border-radius: 5px;
        background-color: #D20062;
        color: white;
        cursor: pointer;
    }

    .box button:hover {
        background-color: #E6337A;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .box .input-group {
            flex: 1 1 calc(50% - 20px); /* Two columns on medium screens */
        }
    }

    @media (max-width: 480px) {
        .box .input-group {
            flex: 1 1 100%; /* One column on small screens */
        }
    }
</style>

<div class="home">
    <form action="{{ route('job_recruitment.store') }}" method="POST">
        @csrf
        <div class="box">
            <div class="header">Job Opportunity</div>
            <div class="input-group">
                <label for="no_of_vacancy">No of vacancies</label>
                <input type="text" name="no_of_vacancy" id="no_of_vacancy" required>
            </div>
            <div class="input-group">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" required>
            </div>
            <div class="input-group">
                <label for="job_role_id">Job Role</label>
                <select id="job_role_id" name="job_role_id"  class="form-control" required>
                    <option value="">Select Job Roles</option>
                    @foreach ($job_roles as $job_role)
                            <option value="{{ $job_role->id }}">{{ $job_role->job_role_name }}</option>
                    @endforeach                   
                </select>
            </div>
            <div class="input-group">
                <label for="agency_id">Agency</label>
                <select  id="agency_id" name="agency_id" class="form-control" required>
                    <option value="">Select Agency</option>
                    @foreach ($agencies as $agency)
                        <option value="{{ $agency->id }}">{{ $agency->agency_name }}</option>
                    @endforeach                                                
                </select>
            </div>
            <div class="input-group">
                <label for="country_id">Country</label>
                <select  id="country_id" name="country_id" class="form-control" required>
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach                          
                </select>
            </div>
            <div class="submit-container">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
<br>
    <div class="container">
       <table>
            <thead>
                <tr>
                    <th>No of vacancy</th>
                    <th>Deadline</th>
                    <th>Job Role</th>
                    <th>Agency</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>                
                @foreach($job_recruitments as $job_recruitment)
                <tr>
                    <td>{{$job_recruitment->no_of_vacancy}}</td>
                    <td>{{$job_recruitment->deadline}}</td>
                    <td>{{optional($job_recruitment->job_roles)->job_role_name }}</td>
                    <td>{{optional($job_recruitment->agencies)->agency_name }}</td>
                    <td>{{optional($job_recruitment->countries)->country_name }}</td>
                    <td>
                        <form action="{{ route('job_recruitment.destroy',$job_recruitment->id) }}" method="POST">
                            <a  href="{{ route('job_recruitment.edit',$job_recruitment->id) }}"><i class="fa fa-pen"></i></a>
                            @csrf
                            @method('DELETE')
                                <button type="submit"><i class="fas fa-trash-alt" style="color:red"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
