<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_role_name',
        'agency_name',
        'agency_email',
        'agency_address',
        'username',
        'email',
        'mobile',
        'company_name',
        'company_email',
        'company_mobile',
        'company_address',        
    ];

}
