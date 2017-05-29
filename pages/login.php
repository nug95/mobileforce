<div class="corpo">
	<div class="titulo-corpo">
		<h3>Login</h3>
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
				<button type="submit" name="logUser">Login</button>
			</div>
		</form>
		<?php
			if(isset($_POST["logUser"])){
				if(!empty($_POST["username"]) &&
				   !empty($_POST["password"]))
				{
					include 'conn.php';
					
					$query = mysqli_query($conn, "SELECT * from login WHERE username='$_POST[username]' AND password='$_POST[password]'");
					$user = mysqli_fetch_array($query);
					if(!$user){
						echo('<span style="text-align:center; color:red;">Dados invalidos!</span>');
					}else{
						$_SESSION["id"] = $user["id"];
						$_SESSION["username"] = $user["username"];
						$_SESSION["tipo"] = $user["tipo"];
						
						echo '<meta http-equiv="refresh" content="0; url=index.php">';
					}
					
					include 'deconn.php';
				}else{
					echo('<span style="text-align:center; color:red;">Todos os campos devem estar preenchidos!</span>');
				}
			}
		?>
	</div>
</div>
<div class="extra">
</div>