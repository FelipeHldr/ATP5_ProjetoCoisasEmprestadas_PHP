<?php

	include "includes/topo.php";
	include "includes/conecta.php";

	$id = "";
	$nome = "";
	$email = "";
	$senha = "";

	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "SELECT * FROM usuarios WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);

		$nome = $row['nome'];
		$email = $row['email'];
		$senha = $row['senha'];
	}
?>
		
		<header>
			<h2>Cadastro de usuários</h2>
		</header>

		<section>
					<?php

			include "includes/menu.php";

			?>

			<article>
				<form action="recebeusuario.php" method="post">
					
					<input type="hidden" name="id" value="<?php echo $id; ?>">

					<label for="nome">Nome</label>
					<input type="text" name="nome" value="<?php echo $nome; ?>">

					<label for="email">E-mail</label>
					<input type="text" name="email" value="<?php echo $email; ?>"/>

					<label for="senha">Senha</label>
					<input type="password" name="senha" value="<?php echo $senha; ?>"/>
				

					<input type="submit">

				</form>
			</article>
		</section>
<?php

	include "includes/rodape.php";

?>