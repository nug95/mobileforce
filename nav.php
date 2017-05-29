<nav>
	<div class="navMenu">
		<ul>
			<li><a href="./">Inicio</a></li>
		<?php
			include 'conn.php';
			$query = mysqli_query($conn, "SELECT * from menus WHERE tipo=0");
			while ($menu = mysqli_fetch_array($query)) {
				echo '<li><a href="index.php?m='.$menu["id"].'">'.$menu["nome"].'</a></li>';
			}
			
			if(isset($_SESSION["tipo"])){
				if($_SESSION["tipo"] == 1){
					$query = mysqli_query($conn, "SELECT * from menus WHERE tipo=1");
					while ($menu = mysqli_fetch_array($query)) {
						echo '<li><a href="index.php?m='.$menu["id"].'">'.$menu["nome"].'</a></li>';
					}
				}elseif($_SESSION["tipo"] == 2) {
					$query = mysqli_query($conn, "SELECT * from menus WHERE tipo >= 1");
					while ($menu = mysqli_fetch_array($query)) {
						echo '<li><a href="index.php?m='.$menu["id"].'">'.$menu["nome"].'</a></li>';
					}
				}
			}
			
			include 'deconn.php';
		?>
		</ul>
	</div>
</nav>