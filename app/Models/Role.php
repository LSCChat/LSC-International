<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Role extends Model
{
    use HasFactory;
    protected $fillable =[
        'role_name',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    
     public function companies()
    {
        return $this->belongsTo(Company::class);
    }
    
}
