<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markaz extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'drektor',
        'phone',
        'addres',
        'payme_id',
        'status',
        'image',
        'count_sms',
        'mavjud_sms',
    ];
    public function users(){return $this->hasMany(User::class);}
    public function kassas(){return $this->hasMany(Kassa::class);}
}
