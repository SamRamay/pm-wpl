<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name',
        'project_id',
        'company_id',
        'user_id',
        'hours',
        'days',

    ];

    public function user()
    {
        # code...
        return $this->belongsTo('App\User');
    }

    public function project()
    {
        # code...
        return $this->belongsTo('App\Project');
    }

    public function company()
    {
        # code...
        return $this->belongsTo('App\Company');
    }

    public function users()
    {
        # code...
        return $this->belongsToMany('App\User');
    }

    public function comments()
    {
        # code...
        return $this->morphMany('App\Comment','commentable');
    }
}
