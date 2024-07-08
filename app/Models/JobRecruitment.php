<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobRole;
use App\Models\Agency;
use App\Models\Country;

class JobRecruitment extends Model
{
    use HasFactory;

    protected $fillable=[
        'no_of_vacancy',
        'deadline',
        'job_role_id',
        'agency_id',
        'country_id',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function job_roles()
    {
        return $this->belongsTo(JobRole::class, 'job_role_id');
    }
    public function agencies()
    {
        return $this->belongsTo(Agency::class,'agency_id');
    }
    public function countries()
    {
        return $this->belongsTo(Country::class,'country_id');
    }

}
