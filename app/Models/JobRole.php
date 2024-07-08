<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\JobRecruitment;

class JobRole extends Model
{
    use HasFactory;
    protected $fillable =[
        'job_role_name',
        'companies_id',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    
     public function companies()
    {
        return $this->belongsTo(Company::class);
    }

    public function jobRecruitments()
    {
        return $this->hasMany(JobRecruitment::class);
    }


}
