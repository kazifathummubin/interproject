<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    protected $fillable = ['name','order','menu_id','route'];
    public  function  Menu()
    {
        return $this->belongsTo('App\menu');
    }
}
