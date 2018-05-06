<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name',
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'city',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments()
    {
        # code...
        return $this->morphMany('App\Comment','commentable');
    }

    public function role()
    {
        # code...
        return $this->belongsTo('App\Role');
    }

    public function companies()
    {
        # code...
        return $this->hasMany('App\Company');
    }

    public function tasks()
    {
        # code...
        return $this->belongsToMany('App\Task');
    }

    public function projects()
    {
        # code...
        return $this->belongsToMany('App\Project');
    }
}
