<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazLessenTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'time',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
