<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'designation',
        'personal_details',
        'membership',
        'department',
        'hospital_address',
        'educational_details',
    ];
}
