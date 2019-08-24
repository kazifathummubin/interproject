<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=['title','project_description', 'project_photo1','project_photo2','project_photo3','project_photo4'
    ,'category_id' ];
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
