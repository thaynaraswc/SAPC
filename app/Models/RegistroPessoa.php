<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroPessoa extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nomePessoa', 'escolaridade', 'nacionalidade', 'estadoCivil', 'estadoNascimento', 'nomeMaePessoa', 'nomePaiPessoa',
                            'endereco_pessoa', 'dataNascimento', 'cidadeNascimento', 'paisNascimento', 'documentos_pessoa', 'profissao', 'localTrabalho', 'sexoPessoa'];

    public function grauEscolaridade()
    {
        return $this->belongsTo('App\Models\Estados', 'id');	
    }

}