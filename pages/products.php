<div class="corpo">
	<div class="container">
		<div class="c25">
			<div class="titulo-container">
				<h3 style="padding-left: 7%;">Menu</h3>
			</div>
			<div class="corpo-container menuProdutos">
				<ul>
					<li><b>Categoria</b></li>
					<li><a href="index.php?m=1&up=1">Telemoveis</a></li>
					<li><a href="index.php?m=1&up=2">Power-banks</a></li>
					<li><a href="index.php?m=1&up=3">Acessorios</a></li>
				</ul>
			</div>
		</div>
		<div class="c75">
			<?php
			
				@$up = $_REQUEST["up"];
				
				switch($up){
					case 1: //Telemoveis
						echo('<div class="titulo-container">');
						echo('<h3>Telemovel</h3>');
						echo('</div>');
						echo('<div class="corpo-container">');
						echo('<table class="tbl-tel" width="100%">');
						echo('<tr><th>Nome</th>');
						echo('<th>Modelo</th>');
						echo('<th>Preço</th>');
						echo('<th></th></tr>');
						echo('<tr><td style="height:30px;" colspan="4"><hr></td></tr>');
						include 'conn.php';
						$query = mysqli_query($conn, "SELECT * from produtos WHERE id_tipo=1");
						while ($tel = mysqli_fetch_array($query)) {
							
							$idt = $tel["id_prod"];
							$query_prod = mysqli_query($conn, "SELECT * from telemoveis WHERE id='$idt'");
							$prod = mysqli_fetch_array($query_prod);
							
							$idmo = $prod["id_modelo"];
							$query_mo = mysqli_query($conn, "SELECT * from modelos WHERE id='$idmo'");
							$mod = mysqli_fetch_array($query_mo);
							
							$idma = $mod["id_marca"];
							$query_ma = mysqli_query($conn, "SELECT * from marcas WHERE id='$idma'");
							$marc = mysqli_fetch_array($query_ma);
							
							echo '<tr align="center">';
							echo '<td>'.$marc["nome"].'</td>';
							echo '<td>'.$mod["nome"].'</td>';
							echo '<td>'.$tel["preco"].'€</td>';
							echo '<td><a href="index.php?m=1&up=1&prod='.$tel["id"].'">Mais...</a></td>';
							echo '</tr>';
							echo('<tr><td style="height:30px;" colspan="4"><hr></td></tr>');
						}
						include 'deconn.php';
						echo('</table></div>');
						break;
					case 2: //Power-banks
						echo('<div class="titulo-container">');
						echo('<h3>Power-banks</h3>');
						echo('</div>');
						echo('<div class="corpo-container">');
						echo('<p>Lista do produto</p>');
						echo('</div>');
						break;
					case 3: //Acessorios
						echo('<div class="titulo-container">');
						echo('<h3>Acessorios</h3>');
						echo('</div>');
						echo('<div class="corpo-container">');
						echo('<p>Lista do produto</p>');
						echo('</div>');
						break;
						
					default:
						echo('<div class="titulo-container">');
						echo('<h3>Produto</h3>');
						echo('</div>');
						echo('<div class="corpo-container">');
						echo('<p>Lista do produto</p>');
						echo('</div>');
						break;
						break;
				}
			?>
		</div>
	</div>
</div>
<div class="extra">
</div>