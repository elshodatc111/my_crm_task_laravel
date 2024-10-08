<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'user_id',
        'cours_id',
        'price',
        'status',
    ];
}