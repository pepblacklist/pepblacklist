<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pep_actions_documents extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_actions',
        'file_name'
    ];
}
