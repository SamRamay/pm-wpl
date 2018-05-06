<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'user_id',

    ];

    public function user()
    {
        # code...
        return $this->belongsTo('App\User');
    }

    public function projects()
    {
        # code...
        return $this->hasMany('App\Project');
    }

    public function comments()
    {
        # code...
        return $this->morphMany('App\Comment','commentable');
    }

}
