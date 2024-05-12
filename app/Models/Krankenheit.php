<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krankenheit extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'Patient_id',

    ];

}
