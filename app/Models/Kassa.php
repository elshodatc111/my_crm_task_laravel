<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kassa extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'kassa_naqt',
        'kassa_naqt_chiqim_pedding',
        'kassa_naqt_xarajat_pedding',
        'kassa_naqt_ish_haqi_pedding',
        'kassa_plastik',
        'kassa_plastik_chiqim_pedding',
        'kassa_plastik_xarajat_pedding',
        'kassa_plastik_ish_haqi_pedding',
    ];
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
