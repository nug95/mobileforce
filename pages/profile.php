<div class="corpo">
	<div class="container">
		<div class="c50">
			<div class="titulo-container">
				<h3>Conta</h3>
			</div>
			<div class="corpo-container">
				<p>
				<?php
					include 'conn.php';
					$idl = $_SESSION["id"];
					$query = mysqli_query($conn, "SELECT * from utilizadores WHERE idl='$idl'");
					$user = mysqli_fetch_array($query);
					if(!$user){
						echo("Erro ao mostrar resultados!");
					}

					echo('<b>Username:</b> <span style="text-decoration:underline;">'.$_SESSION["username"].'</span><br>');
					echo('<b>Nome:</b> <span style="text-decoration:underline;">'.$user["firstname"].'</span><br>');
					echo('<b>Sobrenome:</b> <span style="text-decoration:underline;">'.$user["lastname"].'</span><br>');
					echo('<b>Email:</b> <span style="text-decoration:underline;">'.$user["email"].'</span>');

					include 'deconn.php';
				?>
				</p>
			</div>
		</div>
		<div class="c50">
			<div class="titulo-container">
				<h3>Compras</h3>
			</div>
			<div class="corpo-container">
				Nº de compras
			</div>
		</div>
	</div>
</div>
<div class="extra">
</div>