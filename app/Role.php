<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name',

    ];

    public function users()
    {
        # code...
        return $this->hasMany('App\User');
    }
}
