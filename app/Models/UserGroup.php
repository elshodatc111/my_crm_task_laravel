<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'markaz_id',
        'user_id',
        'grops_id',
        'grops_start_data',
        'grops_start_comment',
        'grops_start_meneger',
        'grops_end_data',
        'grops_end_comment',
        'grops_end_meneger',
        'jarima',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
    public function group(){
        return $this->belongsTo(Grops::class);
    }
}