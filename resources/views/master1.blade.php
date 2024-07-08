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
        color: #38419D;
        font-weight: 500;
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
        background-color:  #38419D;
        color: white;
        cursor: pointer;
    }

    .submit-container button:hover {
        background-color: #0056b3;
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
            <div class="input-group">
                <label for="jobrole">Add Job Role</label>
                <input type="text" id="job_role_name" name="job_role_name">
            </div>
            <div class="submit-container">
                <button type="submit">Submit</button>
            </div>
        </div>
        <div class="div">
            <div class="input-group">
                <label for="agency">Add Agency</label>
                <input type="text" id="agency_name" name="agency_name">
            </div>
            <div class="submit-container">
                <button type="submit">Submit</button>
            </div>
        </div>
        <div class="div">
            <div class="input-group">
                <label for="deadline">Add TC</label>
                <input type="text" id="tc_name" name="tc_name">
            </div>
            <div class="submit-container">
                <button type="submit">Submit</button>
            </div>
        </div>
        <div class="div">
            <div class="input-group">
                <label for="deadline">Add Company</label>
                <input type="text" id="company_name" name="company_name">
            </div>
            <div class="submit-container">
                <button type="submit">Submit</button>
            </div>
        </div>
        <div class="div">
            <div class="input-group">
                <label for="deadline">Add Country</label>
                <input type="text" id="country_name" name="country_name">
            </div>
            <div class="submit-container">
                <button type="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
