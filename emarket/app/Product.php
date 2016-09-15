<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";
    protected $fillable = ['name', 'quantity', 'storage_id'];

    public function storage()
    {
    	return $this->belongsTo('App\Storage'); 
    }
}
