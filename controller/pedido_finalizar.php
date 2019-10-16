<?php 

//Não está logado
if(!Login::Logado()){
	//Cai para acesso negado
	Login::AcessoNegado();
	//Apresenta a pagina para acessa a conta do cliente
	Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());

}else{

	if(isset($_SESSION['PRO'])){

		$smarty = new Template();

		$carrinho = new Carrinho();


		$ref_cod_pedido = date('YmdHms') . $_SESSION['CLI']['cli_id'];


		if(!isset($_SESSION['PED']['pedido'])){
			$_SESSION['PED']['pedido'] = $ref_cod_pedido;
		}

			if(!isset($_SESSION['PED']['ref'])){
				$_SESSION['PED']['ref'] = $ref_cod_pedido;
			}



	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('TEMA', Rotas::get_SiteTEMA());
	
		$pedido = new Pedidos();
		$cliente = 1;
		$cod = $_SESSION['PED']['pedido'];
		$ref = $_SESSION['PED']['ref'];
		

			if($pedido->PedidoGravar($cliente, $cod, $ref)){
			$pedido->LimparSessoes();
		}

	$smarty->display('pedido_finalizar.tpl');


	}else{
		echo '<h4 class="alert alert-danger">Não possuir produtos no carrinho! </h4>';
		Rotas::Redirecionar(3, Rotas::pag_Produtos());
	}


}





 ?>