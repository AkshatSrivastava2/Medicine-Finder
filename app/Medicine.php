<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Medicine extends Model
{
	use Searchable;

    protected $table = "medicine";

    protected $fillable = ['name','quantity','price','potency','user_id'];

    public function searchableAs()
    {
        return 'id';
    }

    public function user()
    {
    	return $this->hasMany('App\User','user_id');
    }
}
