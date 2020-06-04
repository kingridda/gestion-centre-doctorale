<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','ville','prenom','cin','gsm','adresse','salarie',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function encadrant(){
        return $this->belongsTo('App\Encadrant');
    }
    public function these(){
        return $this->belongsTo('App\These');
    }
    public function structure(){
        return $this->belongsTo('App\Structure');
    }
    public function messages(){
        return $this->hasMany('App\Message');
    }
    public function rapports(){
        return $this->hasMany('App\Rapport');
    }
    public function soutenances(){
        return $this->hasMany('App\Soutenance');
    }
}

