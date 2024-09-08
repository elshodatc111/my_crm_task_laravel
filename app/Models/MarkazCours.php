<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazCours extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'cours_name',
        'meneger',
        'status',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
    public function groups(){return $this->hasMany(Grops::class);}
}