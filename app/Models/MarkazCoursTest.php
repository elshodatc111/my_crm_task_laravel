<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazCoursTest extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'cours_id',
        'test_savol',
        'test_javob_true',
        'test_javon_false1',
        'test_javon_false2',
        'test_javon_false3',
        'meneger',
    ];
    public function cours(){
        return $this->belongsTo(MarkazCours::class);
    }
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
}
