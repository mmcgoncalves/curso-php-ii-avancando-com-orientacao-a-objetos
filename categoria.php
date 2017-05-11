<?php
require_once("cabecalho.php");
require 'start.php';

use App\Model\Categoria; ?>

<a href="categoria-formulario.php">Adiciona Categoria</a>

<div class="row">
 <div class="col-lg-12"> 
    <div class="table-responsive">
	    <table class="table table-striped table-bordered table-hover table-condensed">
	    <thead>
	    	<tr>
	    		<th>id</th>
	    		<th>nome</th>
	    		<th>&nbsp;</th>
	    	</tr>     
	    </thead>
	    <tbody>
		<?php
		$categorias = Categoria::all();	
		foreach($categorias as $categoria) :
		?>
			<tr>
				<td><?= $categoria->id ?></td>
				<td><?= $categoria->nome ?></td>			
				<td>
					<a class="btn btn-xs btn-primary" 
						href="categoria-altera-formulario.php?id=<?=$categoria->id?>">
						alterar
					</a>
					<form action="remove-categoria.php" method="post" style="display:inline">
						<input type="hidden" name="id" value="<?=$categoria->id?>">
						<button class="btn btn-xs btn-danger">remover</button>
					</form>
				</td>			
			</tr>
		<?php
		endforeach
		?>	
		</tbody>
		</table>
	    	
    </div>
  </div>
</div> 


<?php include("rodape.php"); ?> 

