<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $fillable = [
        'name',
        'isactive',
        ];

        public function recipes(){
            return $this->hasMany('App/Recipe');
        }    
}
