<?php 
require_once("cabecalho.php");
require 'start.php';

use App\Model\Categoria;

$categoria = Categoria::create(['nome'=>$_POST['nome']]);

if($categoria) { ?>
	<p class="text-success">Categoria <?= $categoria->nome ?> foi adicionada.</p>
<?php 
} else {	
?>
	<p class="text-danger">Não foi possível</p>
<?php
}
?>

<?php include("rodape.php"); ?>