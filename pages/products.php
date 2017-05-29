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
						echo('<p>Lista do produto</p>');
						echo('</div>');
						break;
					case 2: //Power-banks
						break;
					case 3: //Acessorios
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