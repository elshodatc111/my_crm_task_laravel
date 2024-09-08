<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazSmsPaket extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'paket_soni',
        'description',
        'meneger',
        'tulov',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
