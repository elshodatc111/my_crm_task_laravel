<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazSenMessege extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'phone',
        'description',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
