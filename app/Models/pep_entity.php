<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pep_person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'identity',
        'image',
        'pep_type',
        'status',
        'job_position',
        'id_politic_party',
    ];
}
