@extends('navbar')
@section('content')

<style>
    .main-flex {
        width: 90%;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin: 0 auto; /* Center the box */
    }

    .div {
        flex: 1 1 calc(33.33% - 20px); /* Adjust the width for three columns */
        box-shadow: 1px 2px 3px gray;
        background-color: white;
        border-radius: 7px;
        padding: 20px;
        box-sizing: border-box; /* Ensure padding and border are included in width calculation */
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .input-group {
        flex: 1;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
/*        color: #38419D;*/
        color: #686D76;
        font-weight: 500;
        font-size: 15px;
    }

    .input-group input {
        width: 100%;
        padding: 8px; /* Smaller padding for smaller fields */
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 10px; /* Space below the input */
    }

    .submit-container {
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }

    .submit-container button {
        padding: 8px 16px; /* Smaller padding for smaller button */
        border: none;
        border-radius: 5px;
        background-color:  #D20062;
        color: white;
        cursor: pointer;
    }

    .submit-container button:hover {
        background-color: var(--secondary--color);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .div {
            flex: 1 1 calc(50% - 20px); /* Two columns on medium screens */
        }
    }

    @media (max-width: 480px) {
        .div {
            flex: 1 1 100%; /* One column on small screens */
        }
    }
</style>

<div class="home">
    <div class="main-flex">
        <div class="div">
            <div class="header">Add  Role</div>
                <form action="{{ route('master.role.store') }}" method="POST">
                @csrf
                    <div class="input-group">
                        <label>Role</label>
                        <input type="text" id="role_name" name="role_name" required>
                    </div>
                    <div class="submit-container">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            <div class="container">
                <form action="{{ route('master.role.index') }}" method="POST">
                    @csrf
                    <table>
                        <thead>
                            <tr>
                                <th>Role Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                
                            @foreach($roles as $role)
                            <tr>
                                <td>{{$role->role_name}}</td>
                                <td>
                                    <form action="{{ route('master.role.destroy',$role->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit"><i class="fas fa-trash-alt" style="color:red"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>           
            </div>
        </div>

        <div class="div">
            <div class="header">Add Job Role</div>
                <form action="{{ route('master.jobRole.store') }}" method="POST">
                @csrf
                    <div class="input-group">
                        <label>Job Role</label>
                        <input type="text" id="job_role_name" name="job_role_name" required>
                    </div>
                    <div class="submit-container">
                        <button type="submit">Submit</button>
                    </div>
                </form>
                <div class="container">
                    <form action="{{ route('master.index') }}" method="POST">
                        @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>                
                                @foreach($job_roles as $job_role)
                                <tr>
                                    <td>{{$job_role->job_role_name}}</td>
                                    <td>
                                        <form action="{{ route('master.jobRole.destroy',$job_role->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit"><i class="fas fa-trash-alt" style="color:red"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        <div class="div">
            <div class="header">Add Country</div>
                <form action="{{ route('master.country.store') }}" method="POST">
                @csrf
                    <div class="input-group">
                        <label>Country Name</label>
                        <input type="text" id="country_name" name="country_name" required>
                    </div>
                    <div class="submit-container">
                        <button type="submit">Submit</button>
                    </div>
                </form>

                <div class="container">
                    <form action="{{ route('master.country.index') }}" method="POST">
                        @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th>Country Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>                
                                @foreach($countries as $country)
                                <tr>
                                    <td>{{$country->country_name}}</td>
                                    <td>
                                        <form action="{{ route('master.country.destroy',$country->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit"><i class="fas fa-trash-alt" style="color:red"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        <div class="div">
            <div class="header">Add Agency</div>
            <form action="{{ route('master.agency.store') }}" method="POST">
            @csrf
                <div class="input-group">
                    <label>Agency Name</label>
                    <input type="text" id="agency_name" name="agency_name" required>
                </div>
                <div class="input-group">
                    <label>Agency Email</label>
                    <input type="text" id="agency_email" name="agency_email" required>
                </div>
                <div class="input-group">
                    <label>Agency Address</label>
                    <input type="text" id="agency_address" name="agency_address" required>
                </div>

                <div class="submit-container">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <div class="container">
                <form action="{{ route('master.agency.index') }}" method="POST">
                    @csrf
                    <table>
                        <thead>
                            <tr>
                                <th>Agency Name</th>
                                <th>Agency Email</th>
                                <th>Agency Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                
                            @foreach($agencies as $agency)
                            <tr>
                                <td>{{$agency->agency_name}}</td>
                                <td>{{$agency->agency_email}}</td>
                                <td>{{$agency->agency_address}}</td>
                                <td>
                                    <form action="{{ route('master.agency.destroy',$agency->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit"><i class="fas fa-trash-alt" style="color:red"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="div">
            <div class="header">Add User</div>
            <form action="{{ route('master.userdetail.store') }}" method="POST">
            @csrf
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label>Mobile</label>
                    <input type="text" id="mobile" name="mobile" required>
                </div>
                <div class="submit-container">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <div class="container">
                <form action="{{ route('master.userdetail.index') }}" method="POST">
                    @csrf
                    <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                
                            @foreach($user_details as $user_detail)
                            <tr>
                                <td>{{$user_detail->name}}</td>
                                <td>{{$user_detail->mobile}}</td>
                                <td>{{$user_detail->email}}</td>
                                <td>
                                    <form action="{{ route('master.userdetail.destroy',$user_detail->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit"><i class="fas fa-trash-alt" style="color:red"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
