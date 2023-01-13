<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>[Projeto coisas emprestadas]</h2>
		  <h4>Cadastro de usuários</h4>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
		  
				<div>
					<a href="cadusuarios.php"><button>Cadastre um novo usuário</button></a><br/><br/>
				</div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td> - </td>
						<td> - </td>
					</tr>
					<?php
					
						include "includes/conecta.php";
						
						$sql = "SELECT id, nome, email FROM usuarios";
						
						$res = mysqli_query($conn, $sql);
						
						if($res){
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['nome'] ."</td>
										<td>". $row['email'] ."</td>
										<td><a href='cadusuarios.php?id=". $row['id'] ."'><button>Editar</button></a></td>
										<td><a href='excluiusuarios.php?id=". $row['id'] ."'><button>Excluir</button></a></td>
									</tr>";
								
							}
						}
										
					?>
				</table>
		  </article>
		</section>
<?php

	include "includes/rodape.php";
	
?>