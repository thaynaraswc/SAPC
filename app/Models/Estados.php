<?php

namespace App\Models;
use App\Models\Municipios as Municipios;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $primaryKey = 'id';
	protected $fillable = ['id', 'descricao', 'codigo', 'uf'];

	public function municipios()
	{
		return $this->hasMany(Municipios::class, 'id');
	}	

	public function getMunicipios()
	{
		$descricoes = Municipios::where('estado',  $this->id)->pluck('descricao');
		$ids = Municipios::where('estado',  $this->id)->pluck('id');
		$i = 0;

		foreach ($ids as $id) 
		{
			$data[$i]['id'] = $id;
			$i++;	
		}

		$i = 0;

		foreach( $descricoes as $desc)
		{
			$data[$i]['descricao'] = $desc;
			$i++;
		}


		return compact('data');
	}
}

