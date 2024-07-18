<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazSmm extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'smm',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
