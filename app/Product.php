<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable= ['title', 'body', 'keyword', 'price','discount','feature_photo', 'photo1', 'photo2', 'photo3', 'photo4','sku','user_id', 'category_id','stock'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
