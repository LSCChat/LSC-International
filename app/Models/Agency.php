<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobRecruitment;

class Agency extends Model
{
    use HasFactory;
    protected $fillable =[
        'agency_name',
        'agency_email',
        'agency_address',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];


     public function jobRecruitments()
    {
        return $this->hasMany(JobRecruitment::class);
    }
}
