<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazHodimStatistka extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'user_id',
        'naqt',
        'plastik',
        'chegirma',
        'qaytarildi',
        'tashrif',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
