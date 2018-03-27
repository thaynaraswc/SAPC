<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrmtFinAlvara extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nome', 'descricao', 'valor'];
}
