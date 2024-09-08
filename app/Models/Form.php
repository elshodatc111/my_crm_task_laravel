<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;    
    protected $fillable = [
        'markaz_id',
        'type',
        'smm',
        'name',
        'tkun',
        'phone1',
        'phone2',
        'addres',
        'about',
        'status',
        'user_id',
        'meneger',
    ];
}
