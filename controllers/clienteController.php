<?php

class clienteController extends controller{
    //verifica o login
    public function __construct() {
		parent::__construct();

		$usuarios = new Usuarios();

		if(!$usuarios->isLogged()){
			header("Location: " .BASE."login");
        }
        
    }

        public function index() {
            $dados = array(
    
               'cliente' => array()
            );
    
    
       $cliente = new Cliente();

       $veiculo = new Veiculo();
       //busca
     $s = '';

     if(!empty($_GET['busca'])) {
         $s = $_GET['busca'];
     }
    
  
            $dados['cliente'] = $cliente->getClientes($s);
            
            
            $this->loadTemplate('clientes', $dados);
    
        }

        

        
	public function adicionar(){
 



        $dados = array();
        

         

		if(isset($_POST['nome_cliente']) && !empty($_POST['nome_cliente'])){
			$nome_cliente = addslashes($_POST['nome_cliente']);
            $contato = addslashes($_POST['contato']);
            $contato2 = addslashes($_POST['contato2']);
	        $email = addslashes($_POST['email']);

               //  $cpf_cnpj = trim($cpf_cnpj);
              //   $cpf_cnpj = str_replace(array(“.”, “,”, “-“, “/”), “”, $cpf_cnpj);

              $cpf_cnpj =addslashes($_POST['cpf_cnpj']);
        //      $cpf_novo = preg_replace("/[^0-9]/","", $cpf_cnpj);
              $cpf_cnpj = $_POST['cpf_cnpj'];
              $telefoneprincipal = preg_replace("/[^0-9]/","", $contato);
              $telefone2 = preg_replace("/[^0-9]/","", $contato2);



               $rua = addslashes($_POST['rua']);
               $numero_end  = addslashes($_POST['numero_end']);
               $bairro  = addslashes($_POST['bairro']);
               $cidade  = addslashes($_POST['cidade']);
               $cep  = addslashes($_POST['cep']);
               $uf   = addslashes($_POST['uf']);
 
               $cep = preg_replace("/[-]/","", $cep);
        
                     $cpf_cnpj = preg_replace("/[^0-9]/","", $cpf_cnpj);


			$cliente = new Cliente();

                //troquei $contato por $telefoneprincipal e $cpf_cnpj por $cpf_novo e $contato2 por telefone2 usando replace em todos os campos 
            $cliente->addCliente($nome_cliente, $telefoneprincipal, $telefone2, $cpf_cnpj, $email, $rua, $numero_end, $bairro, $cidade, $cep, $uf);
 




			header("Location: " .BASE. "cliente");
		}

		$this->loadTemplate("cliente_add", $dados);
	}
    
    
    public function excluir($id_cliente){

		$cliente = new Cliente();

	    $cliente->deletaCliente($id_cliente);

	    header("Location: ".BASE."cliente");
    }
    
     //editar aqui
    //editar aqui
    public function editar($id_cliente){

    	$dados = array(
           'cliente' => array(),
          'veiculo' => array()
    	);


        $cliente = new Cliente();
        $veiculo = new Veiculo();

        if(isset($_POST['nome_cliente']) && !empty($_POST['nome_cliente'])){
			$nome_cliente = addslashes($_POST['nome_cliente']);
			$contato = addslashes($_POST['contato']);
            $contato2 = addslashes($_POST['contato2']);
            $cpf_cnpj = addslashes($_POST['cpf_cnpj']);
            $email = addslashes($_POST['email']);
            //endereco
            $rua = addslashes($_POST['rua']); 
            $numero_end = addslashes($_POST['numero_end']); 
            $bairro = addslashes($_POST['bairro']); 

            $cidade = addslashes($_POST['cidade']); 

            $cep = addslashes($_POST['cep']); 


            $uf = addslashes($_POST['uf']); 


    		$cliente->updateCliente($id_cliente, $nome_cliente, $contato, $contato2, $cpf_cnpj, $email, $rua, $numero_end, $bairro, $cidade, $cep, $uf);
            
    		header("Location: " .BASE."cliente");
        }
    	 

        $dados['cliente'] = $cliente->getCliente($id_cliente);
        $dados['veiculo'] = $veiculo->getVeiculos($id_cliente);

        //adiciona um veiculo
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

            $placa = preg_replace("/[-]/","", $placa);



            $veiculo->addVeiculo($nome_veiculo, $placa, $iccid, $imei, $numero_chip, $operadora, $modelo, $boleto, $dados_de_acesso, $id_cliente);
            
        }

       
         $this->loadTemplate('cliente_edit', $dados);
           
         

    }

   


    public function deletaVeiculo($id_veiculo) {

		if(!empty($id_veiculo)) {

			$id_veiculo = addslashes($id_veiculo);
			$veiculo = new Veiculo();

			$id_cliente = $veiculo->deletaVeiculo($id_veiculo);

			header("Location: ".BASE."cliente/editar/".$id_cliente);
			exit;
		}

		header("Location: ".BASE);
    }
    

    
    public function editar_veiculo($id_veiculo){

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
    	

    		$id_cliente = $veiculo->updateVeiculo($nome_veiculo, $placa, $iccid, $imei, $numero_chip, $operadora, $modelo, $boleto, $dados_de_acesso, $id_veiculo);

    		header("Location: ".BASE."cliente/editar/".$id_cliente);
    	}

    	$dados['veiculo'] = $veiculo->getVeiculo($id_veiculo);

    	$this->loadTemplate('veiculo_edit', $dados);
    }
	

}
