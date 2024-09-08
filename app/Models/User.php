<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'name',
        'markaz_id',
        'role_id',
        'name',
        'phone1',
        'phone2',
        'addres',
        'tkun',
        'about',
        'smm',
        'status',
        'balans',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function markaz(){
        return $this->belongsTo(Markaz::class);
    }
    public function history(){
        return $this->hasMany(UserHistory::class);
    }
    public function groups(){return $this->hasMany(Grops::class);}
    public function groupuser(){return $this->hasMany(UserGroup::class);}
}
