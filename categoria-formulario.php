<?php
require_once("cabecalho.php");
require 'start.php';

use App\Model\Categoria;

$categoria = new Categoria();

?>

<h1>Formulário de produto</h1>
<form action="categoria-store.php" method="post">
    <div class="row">
        <div class="col-md-6">	
        	<div class="form-group">
        		<label class="control-label">Nome</label> 
        		<input type="text" class="form-control" name="nome" value="<?= $categoria->nome ?>">
        	</div>
        </div>
      </div>  	
	
	<button type="submit" class="btn btn-default">Submit</button>
</form>


<?php include("rodape.php"); ?>


