<?php
    session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
		if($class == 'Email'){
			require_once('assets/email/phpmailer/PHPMailerAutoload.php');
		}
	};

	spl_autoload_register($autoload);


	define('INCLUDE_PATH','http://localhost/passeio-de-buggy-php/');
	//Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','teste');

	//Constantes para o painel de controle
	define('NOME_EMPRESA','MerakiSolucoes');


    
?>