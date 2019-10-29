<?php



if(isset($_SESSION['PRO'])) {



	$smarty = new Template();

	$carrinho = new Carrinho();

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
		$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
	$smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
	$smarty->assign('PESO', number_format($carrinho->GetPeso(),3,'.',''));

if($_POST){ 
require 'controller/calculando-frete.php';
$origem = Config::SITE_CEP;
$destino = $_POST['destino'];
$peso    = $_POST['peso_frete'];
$servico = $_POST['servico'];
$_resultado = calculaFrete( 
$servico, 
$origem, 
$destino, 
$peso, 0 );

$smarty->assign('REAL', '$');
$smarty->assign('SERVICO', $servico. ':');
$smarty->assign('PRAZO', $_resultado['prazo']);
$smarty->assign('VALOR_FRETE', $_resultado['valor']);
$smarty->assign('CEP', $destino = $_POST['destino']);
$smarty->assign('VALOR_USA', Sistema::moedaPhp($_resultado['valor']));
}else{
$smarty->assign('SERVICO', '');
$smarty->assign('PRAZO', '');
$smarty->assign('VALOR_FRETE', '');
$smarty->assign('CEP', '');
$_resultado['valor'] = 0;
}

$valor_frete = Sistema::moedaPhp($_resultado['valor']);    


$smarty->assign('TOTAL_COM_FRETE', Sistema::MoedaBR($carrinho->GetTotal() + $valor_frete));


$smarty->display('carrinho.tpl');


}else{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}

/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
 ?>