<?php 

if(isset($_SESSION['PRO'])){

	$smarty = new Template();

	$carrinho = new Carrinho();


	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('PAG_CARRINHO', Rotas::pag_CarrinhoAlterar());
	$smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_Carrinho());

	$smarty->display('pedido_confirmar.tpl');


}else{
	echo '<h4 class="alert alert-danger">Não possuir produtos no carrinho! </h4>';
		Rotas::Redirecionar(3, Rotas::pag_Produtos());
}


 ?>