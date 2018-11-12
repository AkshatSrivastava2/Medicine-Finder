<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = "medicine";

    protected $fillable = ['name','quantity','price','potency','user_id'];

    public function user()
    {
    	return $this->hasMany('App\User','user_id');
    }
}
