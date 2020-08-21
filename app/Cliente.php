<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

  //  const CREATED_AT = 'data_criacao';
 //   const UPDATED_AT = 'data_alteracao';

    protected $fillable = ['nome','cpf','valorgasto'];


    public function Cliente(){

        $this->belongsTo('App\Produto', 'produto_id', 'id');
    }
}
