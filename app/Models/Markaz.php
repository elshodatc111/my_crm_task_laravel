<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Markaz extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'drektor',
        'phone',
        'addres',
        'payme_id',
        'status',
        'image',
        'count_sms',
        'mavjud_sms',
        'lessen_time',
        'paymart'
    ];
    public function users(){return $this->hasMany(User::class);}
    public function kassas(){return $this->hasMany(Kassa::class);}
    public function balans(){return $this->hasMany(MarkazBalans::class);}
    public function ogohlik(){return $this->hasMany(MarkazOgohlik::class);}
    public function send_messege(){return $this->hasMany(MarkazSendMessege::class);}
    public function sms_paket(){return $this->hasMany(MarkazSmsPaket::class);}
    public function rooms(){return $this->hasMany(MarkazRoom::class);}
    public function paymarts(){return $this->hasMany(MarkazPaymart::class);}
    public function message(){return $this->hasMany(MarkazSmsSetting::class);}
    public function cours(){return $this->hasMany(MarkazCours::class);}
    public function addres(){return $this->hasMany(MarkazAddres::class);}
    public function smm(){return $this->hasMany(MarkazSmm::class);}
    public function sendmessege(){return $this->hasMany(MarkazSendMessage::class);}
    public function history(){return $this->hasMany(UserHistory::class);}
    public function groups(){return $this->hasMany(Grops::class);}
    public function groupuser(){return $this->hasMany(UserGroup::class);}
    public function kirimchiqim(){return $this->hasMany(KassaKirimChiqim::class);}
    public function ishhaqi(){return $this->hasMany(MarkazIshHaqi::class);}
}
