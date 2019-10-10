<?php 

if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['pedido'])){
	$_SESSION['pedido'] = date('YmdHms');
}

require './lib/autoload.php';


$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();


//valores para o template
$smarty->assign('NOME', 'Loja Just Cash');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('CATEGORIAS',$categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());



$smarty->display('index.tpl');
 ?>