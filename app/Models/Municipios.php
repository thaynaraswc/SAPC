<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $fillable = [
        'descricao', 'estado', 'codigo'
    ];
    public function estados()
    {
    	return $this->belongsTo('App\Models\Estados', 'id');	
    }
}
