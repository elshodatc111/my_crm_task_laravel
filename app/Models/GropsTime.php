<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GropsTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'room_id',
        'grops_id',
        'data',
        'time',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
    public function room(){
        return $this->belongsTo(MarkazRoom::class);
    }
    public function cours(){
        return $this->belongsTo(MarkazCours::class);
    }
}
