<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrauEscolaridade extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'descricao'];
}
