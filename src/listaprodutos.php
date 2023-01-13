<?php
	include "includes/topo.php";
?>
		
		<header>
			<h2>[Projeto coisas emprestadas]</h2>
			<h4>Cadastro de produtos</h4>
		</header>

		<section>
			<?php

				include "includes/menu.php";

			?>

			<article>
				
				<div>
					<a href="cadprodutos.php"><button>Cadastre um produto</button></a><br/><br/>
				</div>

				<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>Descrição</td>
						<td>Condição</td>
						<td>-</td>
						<td>-</td>
					</tr>
					<?php

						include "includes/conecta.php";

						$sql = "SELECT id, nome, descricao, condicao FROM produtos";

						$res = mysqli_query($conn, $sql);

						if($res){
							while($row = mysqli_fetch_assoc($res)){

								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['nome'] ."</td>
										<td>". $row['descricao'] ."</td>
										<td>". $row['condicao'] ."</td>
										<td><a href='cadprodutos.php?id=". $row['id'] ."'><button>Editar</button></a></td>
										<td><a href='excluiprodutos.php?id=". $row['id'] ."'><button>Excluir</button></a></td>
									</tr>";
							}
						}

					?>
				</table>
			</article>
		</section>
<?php
	
	include "includes/rodape.php"

?>