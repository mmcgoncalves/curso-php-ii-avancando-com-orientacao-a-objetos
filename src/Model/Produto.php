<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $table = 'produtos';
	public $timestamps = false;
	protected $fillable = ['id', 'nome', 'preco', 'usado', 'descricao', 'categoria_id'];
	
	public function categoria() 
	{
		return $this->belongsTo("App\Model\Categoria");
	}
	
	public function precoComDesconto($valor = 0.1) {
	
		if ($valor > 0 && $valor <= 0.5) {
			$this->preco -= $this->preco * $valor;
		}
	
		return $this->preco;
	}
}