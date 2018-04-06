<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnderecoPessoa extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'cepEnderecoPessoa', 'bairoEnderecoPessoa', 'enderecoPessoa', 'numeroEnderecoPessoa', 'complementoEnderecoPessoa', 'estadoEnderecoPessoa',
                            'cidadeEnderecoPessoa', 'referenciaEnderecoPessoa'];

}
