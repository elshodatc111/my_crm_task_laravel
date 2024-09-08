<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaymart extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'user_id',
        'summa',
        'tulov_type',
        'guruh',
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
