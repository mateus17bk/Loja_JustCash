<?php 
Class Login extends Conexao{
	private $user, $senha;

	function __construct(){
		parent::__construct();
	}

	function GetLogin($user, $senha){
		$this->setUser($user);
		$this->setSenha($senha);

		$query = "SELECT * FROM {$this->prefix}clientes WHERE 
		cli_email = :email AND cli_pass = :senha";

		$params = array (
			':email' => $this->getUser(),
			':senha' => $this->getSenha(),
		);


		$this->ExecuteSQL($query, $params);

		if($this->TotalDados() > 0){
			$lista = $this->ListarDados();

			$_SESSION['CLI']['cli_id'] = $lista['cli_id'];
			$_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
             $_SESSION['CLI']['cli_sobrenome'] =  $lista['cli_sobrenome'];
             $_SESSION['CLI']['cli_endereco'] = $lista['cli_endereco'];
             $_SESSION['CLI']['cli_numero'] = $lista['cli_numero'];
             $_SESSION['CLI']['cli_bairro'] = $lista['cli_bairro'];
             $_SESSION['CLI']['cli_cidade'] = $lista['cli_cidade'];
             $_SESSION['CLI']['cli_uf'] = $lista['cli_uf'];
             $_SESSION['CLI']['cli_cpf'] = $lista['cli_cpf'];
             $_SESSION['CLI']['cli_cep'] = $lista['cli_cep'];
             $_SESSION['CLI']['cli_rg'] = $lista['cli_rg'];
             $_SESSION['CLI']['cli_ddd'] = $lista['cli_ddd'];
             $_SESSION['CLI']['cli_fone'] = $lista['cli_fone'];
             $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
             $_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
             $_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
             $_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];
             $_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
             $_SESSION['CLI']['cli_pass'] = $lista['cli_pass']; 

             Rotas::Redirecionar(0, Rotas::pag_ClienteLogin());
             
		}else{
			
		}


	}



	static function AcessoNegado(){
		echo '<div class="alert alert-danger"><a href="'.Rotas::pag_ClienteLogin().'" class="btn btn-danger">Login </a> Acesso Negado, faca Login </div>';
	}

	static function Logado(){
		if(isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])){
			return TRUE;
		}else{
			return FALSE;
		}
	}



	static function Logoff(){
		unset($_SESSION['CLI']);
		echo '<h4 class="alert alert-success"> Saindo... </h4>';

		Rotas::Redirecionar(2, Rotas::get_SiteHome());
	}


	//Função para mostrar o menu do cliente
	static function MenuCliente(){
        
     // verifo se não esta logado 
    	if(!self::Logado()):
			
			self::AcessoNegado();
            Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());                  
            // caso nao redirecione  saiu  do bloco
            exit();                
            // caso esteja mostra a tela minha conta 
            else:
                
        $smarty = new Template();
        
        $smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
        $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
        $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
        $smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
        $smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
        $smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
        $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
        
        $smarty->display('menu_cliente.tpl');
        
       	endif;
    }



	private function setUser($user){
		$this->user = $user;
	}


	private function setSenha($senha){
		$this->senha = /*Sistema::Criptografia(*/$senha/*)*/;
	}

	function getUser(){
		return $this->user;
	}

	function getSenha(){
		return $this->senha;
	}

}





 ?>