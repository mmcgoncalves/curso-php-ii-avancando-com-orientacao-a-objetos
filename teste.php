<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'start.php';

use Illuminate\Database\Capsule\Manager as DB;
use App\Model\Categoria;
use App\Model\Produto;




echo "<pre/>";

$result  = DB::table("categorias")->get();

foreach ($result->toArray() as $var){
	echo $var->id.'===>'.$var->nome.'<br/>';
	
}

$result  = DB::select("SELECT * FROM categorias");

foreach ($result as $var){
	echo $var->id.'===>'.$var->nome.'<br/>';
}

//print_r(Categoria::all()->toArray());

$produtos = Produto::all();

foreach ($produtos as $produto){
	print_r($produto->toArray());
	print_r($produto->categoria->toArray());
	
}

