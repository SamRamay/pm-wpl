<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'user_id',
        'days',

    ];

    
    public function users()
    {
        # code...
        return $this->belongsToMany('App\User');
    }

    public function company()
    {
        # code...
        return $this->belongsTo('App\Company');
    }

    public function comments()
    {
        # code...
        return $this->morphMany('App\Comment','commentable');
    }

}
