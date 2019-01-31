<?php

class Cliente extends model{

    private $info;

    
public function isLogged(){


	if(isset($_SESSION['lgadmin']) && !empty($_SESSION['lgadmin'])){
		return true;
	}else{
		return false;
	}
}


public function getClientes($s=''){
	if(!empty($s)) {
		$sql = "SELECT * FROM cliente WHERE LOWER(nome_cliente) LIKE LOWER(:nome_cliente)";
		$sql = $this->db->prepare($sql);
		$s = str_replace(' ', '%', '%'.$s.'%');
		$sql->bindValue(":nome_cliente", $s); //da busca
		$sql->execute();
}else{
	$sql = "SELECT * FROM cliente";
	$sql = $this->db->query($sql);
}

	if($sql->rowCount() > 0){
		$array = $sql->fetchAll();
	}else{

		return 0;
	}

	return $array;
}


public function deletaCliente($id_cliente){

	$sql = "DELETE FROM cliente where id_cliente = '$id_cliente'";
	$this->db->query($sql);
		
    }
    

    public function addCliente($nome_cliente, $contato, $contato2, $cpf_cnpj, $email, $rua, $numero_end, $bairro, $cidade, $cep, $uf){


         $this->db->query("INSERT INTO cliente SET nome_cliente = '$nome_cliente', contato = '$contato', contato2 = '$contato2', cpf_cnpj = '$cpf_cnpj', email='$email', rua = '$rua',
         	numero_end = '$numero_end', bairro = '$bairro', cidade = '$cidade', cep = '$cep', uf = '$uf'");

    }
	
	public function updateCliente($id_cliente, $nome_cliente, $contato, $contato2, $cpf_cnpj, $email, $rua, $numero_end, $bairro, $cidade, $cep, $uf){
		$this->db->query("UPDATE cliente SET nome_cliente = '$nome_cliente', contato = '$contato', contato2 = '$contato2', email = '$email', cpf_cnpj = '$cpf_cnpj', rua = '$rua', numero_end = '$numero_end', bairro = '$bairro', cidade = '$cidade', cep = '$cep', uf = '$uf'  WHERE id_cliente = '$id_cliente'");

	}

    public function getCliente($id_cliente){

		$array = array();

		$sql = "SELECT * FROM cliente WHERE id_cliente = '$id_cliente'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
    }
    

    




		//saber o total de items na paginacao
		public function getTotal(){
			$sql = "SELECT COUNT(*) as c FROM cliente";
			$sql = $this->db->query($sql);
			$sql = $sql->fetch();
	
			return $sql['c'];
		}

}