<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEslatma extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'user_id',
        'comment',
        'meneger',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
