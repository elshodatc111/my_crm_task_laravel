<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazPaymart extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'summa',
        'chegirma',
        'admin_chegirma',
        'chegirma_time',
        'meneger',
        'status',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
    public function groups(){return $this->hasMany(Grops::class);}
}
