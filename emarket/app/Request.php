<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $table = "requests";
    protected $fillable = ['name', 'quantity', 'application_id'];

    public function application()
    {
    	return $this->belongsTo('App\Application');
    }
}
