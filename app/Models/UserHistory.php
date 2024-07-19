<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'user_id',
        'status',
        'guruh',
        'summa',
        'tulov_type',
        'comment',
        'xisoblash',
        'balans',
        'meneger',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}