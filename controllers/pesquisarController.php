<?php

class pesquisarController extends controller{
    //verifica o login
    public function __construct() {
		parent::__construct();

		$usuarios = new Usuarios();

		if(!$usuarios->isLogged()){
			header("Location: " .BASE."login");
        }
        
    }


    
    public function index() {
      
        $data = array();


        $veiculo = new Veiculo();
        //busca
      $s = '';

      if(!empty($_GET['busca'])) {
          $s = $_GET['busca'];
      }

      //fim da busca
       //pega a lista de produtos
      //s da busca
      $data['list'] = $veiculo->getVeiculosPesquisa($s);

      $this->loadTemplate('veiculos-pesquisa', $data);

    }



    public function excluirVeiculoPesquisar($id_veiculo){
		$veiculo = new Veiculo();
		$veiculo->deletaVeiculoPesquisar($id_veiculo);

        header("Location: " .BASE. "pesquisar");

    }
    

    
    public function editarVeiculoPesquisar($id_veiculo){

    	$dados = array();


    	$veiculo = new Veiculo();

        if(isset($_POST['nome_veiculo']) && !empty($_POST['nome_veiculo'])){
			$nome_veiculo = addslashes($_POST['nome_veiculo']);
            $placa = addslashes($_POST['placa']);
            $iccid = addslashes($_POST['iccid']);
            $imei = addslashes($_POST['imei']);
            $numero_chip = addslashes($_POST['numero_chip']);
            $operadora = addslashes($_POST['operadora']);
            $modelo = addslashes($_POST['modelo']);
            $boleto = addslashes($_POST['boleto']);
            $dados_de_acesso = addslashes($_POST['dados_de_acesso']);
    	

    		$veiculo->updateVeiculoPesquisar($nome_veiculo, $placa, $iccid, $imei, $numero_chip, $operadora, $modelo, $boleto, $dados_de_acesso, $id_veiculo);
            

    		header("Location: ".BASE."pesquisar");
    	}

    	
        $dados['veiculo'] = $veiculo->getVeiculo($id_veiculo);
    	$this->loadTemplate('veiculo_edit', $dados);
    }




}