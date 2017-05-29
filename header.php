<header>
	<div class="cel50 logotipo">
		<a href="./">Mobile<i>Force</i></a>
	</div>
	<div class="cel50 logUser">
		<ul>
		<?php
			if(isset($_SESSION["username"])){
				echo '<li><a href="index.php?Logout">Terminar Sessão</a></li>';
			}else{
				echo '<li><a href="index.php?m=Login">Login</a></li>';
				echo '<li>/</li>';
				echo '<li><a href="index.php?m=Register">Registar</a></li>';
			}
			
			if(isset($_REQUEST["Logout"])){
				session_destroy();
				echo '<meta http-equiv="refresh" content="0; url=index.php">';
			}
		?>
		</ul>
	</div>
</header>