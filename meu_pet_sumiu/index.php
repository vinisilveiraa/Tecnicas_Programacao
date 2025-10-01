<?php
	require __DIR__ . '/vendor/vlucas/phpdotenv';
	use Dotenv\Dotenv;
	$dotenv = Dotenv :: createImmutable(__DIR__);
	$dotenv->load();

	$email_username = $_ENV["EMAIL_USERNAME"];
	// echo $email_username; // tirar dps
	// die();
	$email_password = $_ENV["EMAIL_PASSWORD"];
	$db_username= $_ENV["DB_USERNAME"];
	$db_password= $_ENV["DB_PASSWORD"];

	if($_GET)
	{
		//outras rotas
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		require_once "Controllers/$controle.class.php";
		$obj = new $controle();
		$obj->$metodo();
	}
	else
	{
		//rota inicial
		require_once "Controllers/inicioController.class.php";
		$obj = new inicioController();
		$obj->inicio();
	}
?>