<?php

	include "includes/topo.php";

?>

		<header>
			<h2>[Projeto coisas emprestadas]</h2>
			<h4>Bem - vindo <?php echo $_SESSION['nome']; ?>!</h4>
		</header>

		<section>
			
			<?php
			include "includes/menu.php";
			?>

			<article>

				Itens registrados <br/><br/><br/><br/><br/>

				<a href="logout.php"><button>Sair</button></a>
			</article>

		</section>

<?php

	include "includes/rodape.php";

?>