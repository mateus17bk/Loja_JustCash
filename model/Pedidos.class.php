<?php 
Class Pedidos extends Conexao{
	function __construct(){
		parent::__construct();
	}

	function PedidoGravar($cliente, $cod, $ref, $freteValor=null, $freteTipo=null){
		$retorno = FALSE;
		 
		 $query  = "INSERT INTO ".$this->prefix."pedidos ";   
    	 $query .= "(ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_frete_valor, ped_frete_tipo)"; 
     	 $query .= " VALUES ";
     	 $query .= "(:data, :hora, :cliente, :cod, :ref, :frete_valor, :frete_tipo)";

     	 $params = array(
     	 	':data' => Sistema::DataAtualUS(),
            ':hora' => Sistema::HoraAtual(),
            ':cliente'=> (int)$cliente,
            ':cod' => $cod,
            ':ref' => $ref,
            ':frete_valor'=>$freteValor,
            ':frete_tipo' =>$freteTipo    
     	 );


     	 $this->ExecuteSQL($query, $params);

     	 //Gravar os itens dos pedidos
     	 $this->ItensGravar($cod);
     	 $retorno = TRUE;
     	 return $retorno;

	}


    function GetPedidosCliente($cliente=null){
        $query = "SELECT * FROM pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";
        if($cliente != null){
            $cli = (int)$cliente;
            $query .= " WHERE ped_cliente = {$cli}";
        }
    }

	//Codigo do pedido 
	function ItensGravar($codpedido){
		$carrinho = new Carrinho();
		foreach ($carrinho->GetCarrinho() as $item) {
			$query  = "INSERT INTO ".$this->prefix."pedidos_itens ";
        	$query .= "(item_produto, item_valor, item_qtd, item_ped_cod)";
        	$query .= "VALUES  (:produto,:valor,:qtd,:cod)";
            
            $params = array(
                ':produto' => $item['pro_id'],
                ':valor'   => $item['pro_valor_us'],
                ':qtd'     => (int)$item['pro_qtd'],
                ':cod'     =>  $codpedido  
                );
			
			$this->ExecuteSQL($query, $params);
			

		}

	}


	function LimparSessoes(){
		unset($_SESSION['PRO']);
		unset($_SESSION['pedido']);
	


	}

}


 ?>