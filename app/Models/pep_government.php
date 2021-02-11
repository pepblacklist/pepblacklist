<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pep_government extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_politic_party',
        'president',
        'date_init',
        'date_end',
        'image'
    ];
}
