<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroPessoa extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nomePessoa', 'escolaridade',  'estadoCivil', 'estadoNascimento', 'nomeMaePessoa', 'nomePaiPessoa',
                            'endereco_pessoa', 'dataNascimento', 'cidadeNascimento',  'documentos_pessoa', 'profissao', 'localTrabalho', 'sexoPessoa'];


}