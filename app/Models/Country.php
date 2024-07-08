<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobRecruitment;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_name',
        'is_active',
    ];
    


     public function jobRecruitments()
    {
        return $this->hasMany(JobRecruitment::class);
    }
}
