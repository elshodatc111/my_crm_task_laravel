<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazOgohlik extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'data',
        'description',
        'meneger',
        'status',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
