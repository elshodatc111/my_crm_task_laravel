<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazBalans extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'balans_naqt',
        'balans_naqt_chiqim',
        'kassa_naqt_xarajat',
        'balans_plastik',
        'balans_plastik_chiqim',
        'kassa_plastik_xarajat',
        'balans_payme',
        'balans_payme_chiqim',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
