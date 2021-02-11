<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pep_actions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_entity',
        'title',
        'amount_steal',
        'amount_wasted',
        'detail',
        'more_info',
        'date_happened'
    ];
}
