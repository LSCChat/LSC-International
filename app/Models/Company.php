<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobRole;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_mobile',
        'company_email',
        'company_address',
         'password',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
     public function job_roles()
    {
        return $this->hasMany(JobRole::class);
    }
}