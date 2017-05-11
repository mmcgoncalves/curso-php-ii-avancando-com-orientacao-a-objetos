<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'categorias';
	public $timestamps = false;
	protected $fillable = ['id', 'nome'];
}