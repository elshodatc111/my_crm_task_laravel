<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'cours_id',
        'user_id',
        'count',
        'ball',
        'urinish'
    ];
}
