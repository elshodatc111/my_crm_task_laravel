<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkazCoursVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'cours_id',
        'cours_title',
        'cours_url_token',
        'cours_number',
        'meneger',
    ];
    public function coursvideo(){
        return $this->belongsTo(MarkazCours::class);
    }
    public function coursvideos(){
        return $this->belongsTo(Markaz::class);
    }
}
