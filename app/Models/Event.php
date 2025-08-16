<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * para cirar uma model é necessario utilizar o comando:
 * 
 * php artisan make:model nome_model
 */
class Event extends Model
{
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    public function user(){
        return $this->belongsTo('Apps\Models\User');
    }
}
