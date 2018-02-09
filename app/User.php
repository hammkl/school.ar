<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $incrementing = false;
    
    protected $table = 'set_users';

    protected $fillable = [
    	'name', 'surname','email', 'password', 'active', 'isProfessor', 'isAdmin', 'professor_id' 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
