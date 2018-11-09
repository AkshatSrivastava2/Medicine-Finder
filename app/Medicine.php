<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table="medicine";

    public function user()
    {
    	return $this->hasMany('App\User','user_id');
    }
}
