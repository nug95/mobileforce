<div class="corpo">
	<div class="titulo-corpo">
		<h3>Registar</h3>
	</div>
	<div class="loginForm">
		<form method="post">
			<div class="form-group">
				<h4>Username</h4>
				<input type="text" name="username" placeholder="Username" autofocus required="">
			</div>
			<div class="form-group">
				<h4>Password</h4>
				<input type="password" name="password" placeholder="Password" required="">
			</div>
			<div class="form-group">
				<h4>Repetir Password</h4>
				<input type="password" name="repassword" placeholder="Password" required="">
			</div>
			<div class="form-group">
				<h4>Primeiro Nome</h4>
				<input type="text" name="firstname" placeholder="Primeiro Nome" required="">
			</div>
			<div class="form-group">
				<h4>Ultimo Nome</h4>
				<input type="text" name="lastname" placeholder="Ultimo nome" required="">
			</div>
			<div class="form-group">
				<h4>E-mail</h4>
				<input type="email" name="email" placeholder="E-mail" required="">
			</div>
			<div class="form-group">
				<button type="submit" name="regUser">Registar</button>
			</div>
		</form>
		<?php
			
			if(isset($_POST["regUser"])){
				if(!empty($_POST["username"]) &&
				   !empty($_POST["password"]) &&
				   !empty($_POST["repassword"]) &&
				   !empty($_POST["firstname"]) &&
				   !empty($_POST["lastname"]) &&
				   !empty($_POST["email"])){
					if($_POST["password"] === $_POST["repassword"])
					{
						
						include 'conn.php';
						
						mysqli_query($conn, "INSERT INTO login (username, password) VALUES ('$_POST[username]','$_POST[password]')");
						$idl = mysqli_insert_id($conn);
						mysqli_query($conn, "INSERT INTO utilizadores (idl,firstname,lastname,email) VALUES ('$idl','$_POST[firstname]','$_POST[lastname]','$_POST[email]')");
						
						echo '<meta http-equiv="refresh" content="0; url=index.php?m=Register&?i=success">';
						include 'deconn.php';
						
					}else{
						echo('<span style="text-align:center; color:red;">As passwords não conferem!</span>');
					}
				}else{
					echo('<span style="text-align:center; color:red;">Todos os campos devem estar preenchidos!</span>');
				}
			}
		
		?>
	</div>
</div>
<div class="extra">
</div>