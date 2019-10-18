<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "Just Cash";
	const SITE_EMAIL_ADM = "justcashsuporte@gamil.com";
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '57100000';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojajustcash",
		  BD_PREFIX = "jc_";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "justcashsuporte@gamil.com";
	const EMAIL_NOME = "Contato - Loja Just Cash";
	const EMAIL_SENHA = "adminphp123456";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "justcashsuporte@gamil.com";



}
 ?>

