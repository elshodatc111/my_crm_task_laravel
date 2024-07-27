<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazIshHaqi extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'user_id',
        'typing',
        'summa',
        'type',
        'guruh',
        'guruh_name',
        'comment',
        'meneger',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}