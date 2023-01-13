<?php

	include "includes/topo.php";

	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$descricao = "";
	$condicao = "";
	
	if(isset($_GET['id'])){
		
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM produtos WHERE id = $id";

		$res = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($res);
		
		$nome = $row['nome'];
		$descricao = $row['descricao'];
		$condicao = $row['condicao'];
		
	}


?>

	
		<header>
		  <h2>Cadastro de produtos</h2>
		</header>
		
		<section>
		  		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
			<form action="recebeproduto.php" method="post">
			
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			
				<label for="nome">Nome do produto</label> 
				<input type="text" name="nome" value="<?php echo $nome; ?>" />
				

				<label for="descricao">Descrição</label>
				<input type="text" name="descricao" value="<?php echo $descricao; ?>"/>
				

				<label for="condicao">Condição do produto</label>
				<select name="condicao">
					<option value="novo" <?php if($condicao=='novo'){echo "selected";}?> >Novo</option>
					<option value="usado" <?php if($condicao=='usado'){echo "selected";}?> >Usado</option>
				</select>

				<input type="submit">
			
			</form>
			<a href="listaprodutos.php">Voltar</a>
		  </article>
		</section>

<?php

	include "includes/rodape.php";
	
?>