<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KassaKirimChiqim extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'hodisa',
        'summa',
        'type',
        'status',
        'comment',
        'meneger',
        'administrator',
    ];
    public function kirimchiqim(){
        return $this->belongsTo(Markaz::class);
    }
}
