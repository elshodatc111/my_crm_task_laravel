<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grops extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'tulov_id',
        'room_id',
        'cours_id',
        'techer_id',
        'guruh_name',
        'guruh_start',
        'guruh_end',
        'hafta_kun',
        'dars_count',
        'techer_foiz',
        'techer_paymart',
        'techer_bonus',
        'dars_time',
        'next_id',
        'meneger',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
    public function tulov(){
        return $this->belongsTo(MarkazPaymart::class);
    }
    public function room(){
        return $this->belongsTo(MarkazRoom::class);
    }
    public function cours(){
        return $this->belongsTo(MarkazCours::class);
    }
    public function techer(){
        return $this->belongsTo(User::class);
    }
    public function grouptime(){return $this->hasMany(Grops::class);}
    public function groupuser(){return $this->hasMany(UserGroup::class);}
}
