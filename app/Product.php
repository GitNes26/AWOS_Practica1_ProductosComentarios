<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; //confirmar que este modelo pertenece a la tal tabla

    public function comments(){
        return $this->hasMany('App\Comment');
        // la tabla products(Product) tiene una relacion MUCHOS A MUCHOS la tabla comment(Comment)
    }
}
