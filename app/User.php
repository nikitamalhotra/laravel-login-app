<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property mixed role
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

	public function role(){
		return $this->belongsTo('App\Role');
	}

	public function isAdmin(){
		if($this->role->name == 'Administrator'){
			return true;
		}
		return false;
	}



}
