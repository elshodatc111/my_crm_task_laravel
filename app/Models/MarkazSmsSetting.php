<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazSmsSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'new_user',
        'tkun',
        'new_pay',
    ];
    public function message(){
        return $this->belongsTo(Markaz::class);
    }
}
