<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable= ['name','order','route'];

    public  function  submenu()
    {
        return $this->hasMany('App\submenu');
    }
}
