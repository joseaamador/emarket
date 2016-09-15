<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    //
    protected $table = "storages";
    protected $fillable = ['name'];

    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
