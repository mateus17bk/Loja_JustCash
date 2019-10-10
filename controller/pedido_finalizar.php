<?php 

if(isset($_SESSION['PRO'])){

	$smarty = new Template();

	$carrinho = new Carrinho();


	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('TEMA', Rotas::get_SiteTEMA());
	
	$pedido = new Pedidos();
	$cliente = 1;
	$cod = $_SESSION['pedido'];
	$ref = '4655524ref';

	if($pedido->PedidoGravar($cliente, $cod, $ref)){
		$pedido->LimparSessoes();
	}

	$smarty->display('pedido_finalizar.tpl');


}else{
	echo '<h4 class="alert alert-danger">Não possuir produtos no carrinho! </h4>';
		Rotas::Redirecionar(3, Rotas::pag_Produtos());
}


 ?>