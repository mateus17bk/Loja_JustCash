<?php 

Class Conexao extends Config{
	private $host, $user, $senha, $banco;

	protected $obj, $itens=array(), $prefix;

	public $paginacao_links, $totalpags, $limite, $inicio;

	//Construtor da minha função 
	function __construct(){
		$this->host = self::BD_HOST;
		$this->user = self::BD_USER;
		$this->senha = self::BD_SENHA;
		$this->banco = self::BD_BANCO;
		$this->prefix = self::BD_PREFIX;

		//Excução obrigatoria do Conectar
		try {
			if($this->Conectar() == null){
				$this->Conectar();
			}
			

		} catch (Exception $e) {
			exit($e->getMessage().'<h2> Erro ao conectar com o banco de dados! </h2>');
		}

	}

	private function Conectar(){
		//Array tá guardadno a codificação, alerta de algum erro 
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
			);
		//Excução 
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco}" , 
			$this->user, $this->senha, $options);
		return $link;
	}


	//Verificar os dados da tabela
	function ExecuteSQL($query, array $params = NULL){
		$this->obj = $this->Conectar()->prepare($query);

		//verificação dos parametros na URL
		if(@count($params) > 0){
			foreach ($params as $key => $value){
				$this->obj->bindvalue($key, $value);
			}	
		}	

		return $this->obj->execute();
	}

	function ListarDados(){
		return $this->obj->fetch(PDO::FETCH_ASSOC);
	}

	function TotalDados(){
		return $this->obj->rowCount();
	}


	function GetItens(){
		return $this->itens;
	}


	function PaginacaoLinks($campo, $tabela){
		$pag = new Paginacao();
		$pag->GetPaginacao($campo, $tabela);

		//Pega a array de paginação 
		$this->paginacao_links = $pag->link;

		$this->totalpags = $pag->totalpags;
		$this->inicio = $pag->inicio;
		$this->limite = $pag->limite;
		

		$inicio = $pag->inicio;
		$limite = $pag->limite;

		if($this->totalpags > 0){
			return " limit {$inicio}, {$limite}";
		}else{
			return " ";
		}
		

	}

	//Botão das páginas
	protected function Paginacao($paginas=array()){
		//Classe bootstrap
		$pag = '<ul class="pagination">';
		$pag .= '<li><a href="?p=1"> << Inicio </a></li>';

			//Percorre o número de páginas nímero para variavel $p	
			if(is_array($paginas)){
				foreach($paginas as $p){
				$pag .= '<li><a href="?p='.$p.'"> '.$p.' </a></li>';

				}

			$pag .= '<li><a href="?p='. $this->totalpags .'">... '.$this->totalpags.' >> </a></li>';

			}
			

		$pag .= '</ul>';

		if($this->totalpags > 1){
			return $pag;
		}
	}

	//Array de links
	function ShowPaginacao(){
		return $this->Paginacao($this->paginacao_links);
	}


}

 ?>