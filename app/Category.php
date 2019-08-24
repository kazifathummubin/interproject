<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','remarks','user_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function product(){
        return $this->hasMany('App\Product','category_id');
    }
    public function project(){
        return $this->hasMany('App\Project','category_id');
    }
}
