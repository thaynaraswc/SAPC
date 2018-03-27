<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrmtProfPessoa extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'descricao'];
}
