<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments'; //confirmar que este modelo pertenece a la tal tabla

    public function products(){
        return$this->belongsTo('App\Product');
        // la tabla comentarios(Comment) PERTENECE A la tabla productos(Product)
    }
    public function users(){
        return $this->belongsTo('App\User');
        // la tabla comentarios(Comment) PERTENECE A la tabla users(User)

    }
}
