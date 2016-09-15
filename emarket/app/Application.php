<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $table = "applications";
    protected $fillable = ['id', 'state'];

    public function requests()
    {
    	return $this->hasMany('App\Request');
    }
}
