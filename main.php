<main>
<?php
	@$m = $_REQUEST["m"];

	switch ($m) {
		case 1: //Produtos
			include 'pages/products.php';
			break;
		case 2: //Lojas
			break;
		case 3: //Sobre
			break;
		case 4: //Contacto
			break;
		case 5: //Conta
			if(!isset($_SESSION["username"])){
				header("Location: index.php");
			}else{
				include 'pages/profile.php';
			}
			break;
		case 6: //Carrinho de compras
			if(!isset($_SESSION["username"])){
				header("Location: index.php");
			}
			break;
		case 7: // Painel de controlo
			if(!isset($_SESSION["username"])){
				header("Location: index.php");
			}
			
			if($_SESSION["tipo"] < 2){
				header("Location: index.php");
			}else{
				header("Location: painel/");
			}
			break;
			
		case 'Login':
			include 'pages/login.php';
			break;
		
		case 'Register':
			include 'pages/register.php';
			break;
			
		default:
			include 'pages/intro.php';
			break;
	}
?>
</main>