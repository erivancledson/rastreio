<?php
class usuariosController extends controller {

	public function __construct() {
		parent::__construct();

		$usuarios = new Usuarios();

		if(!$usuarios->isLogged()){
			header("Location: " .BASE."Login");
		}
	
	}


	public function index() {
		$dados = array(

           'usuarios' => array()
		);

		
		$usuarios = new Usuarios();





		$dados['usuarios'] = $usuarios->getUsuarios();
        
		
		$this->loadTemplate('usuarios', $dados);

	}

	public function adicionar(){

		$dados = array();

		if(isset($_POST['login']) && !empty($_POST['login'])){
			
			$login = addslashes($_POST['login']);
			$senha = md5($_POST['senha']);

			$usuarios = new Usuarios();

			$usuarios->addUsuario($login, $senha);

			header("Location: " . BASE . 'usuarios');

		}

		$this->loadTemplate("usuarios_add", $dados);
	}

	public function excluir($id){
		$usuarios = new Usuarios();
		$usuarios->deletaUsuario($id);

        header("Location: " .BASE. "usuarios");

	}



    public function editar($id){

    	$dados = array(
           'usuario' => array()
    	);


    	$usuarios = new Usuarios();

    	if(isset($_POST['login']) && !empty($_POST['login'])){
    	
    		$login = addslashes($_POST['login']);
    		$senha = md5($_POST['senha']);

    		$usuarios->updateUsuario($id, $login, $senha);

    		header("Location: " .BASE."usuarios");
    	}

    	$dados['usuario'] = $usuarios->getUsuario($id);

    	$this->loadTemplate('usuarios_edit', $dados);
    }

}