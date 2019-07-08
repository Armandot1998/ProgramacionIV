<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name',
        'document_no',
        'preparedness',
        'pax',
        'isactive',
        ];

        Public function category() {
            return belongsTo('App\Category');
        } 

        public function technique(){
            return belongsTo('App/Technique');
        }
        
        public function process(){
            return $this->hasMany('App/Process');
        }

        public function ingredients(){
            return $this->hasMany('App/Ingredient');
        }
        
           
}
