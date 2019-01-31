<?php

class Veiculo extends model{

    private $info;

    
public function isLogged(){


	if(isset($_SESSION['lgadmin']) && !empty($_SESSION['lgadmin'])){
		return true;
	}else{
		return false;
	}
}

   
        public function getVeiculos($id_cliente){
            $array = array();
            $sql = "SELECT * FROM veiculo WHERE id_cliente = '$id_cliente'";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }else{

                return 0;
            }

            return $array;
        }


          //para o editar
        public function getVeiculo($id_veiculo) {
            $array = array();
                     
            $sql = "SELECT * FROM veiculo WHERE id_veiculo = '$id_veiculo'";
            $sql = $this->db->query($sql);
    
            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
    
            return $array;
        }


     
     public function addVeiculo($nome_veiculo, $placa, $iccid, $imei, $numero_chip, $operadora, $modelo, $boleto, $dados_de_acesso, $id_cliente) {

		$this->db->query("INSERT INTO veiculo SET nome_veiculo = '$nome_veiculo', placa = '$placa', iccid = '$iccid', imei = '$imei', numero_chip = '$numero_chip', operadora = '$operadora', modelo = '$modelo', boleto = '$boleto', dados_de_acesso = '$dados_de_acesso',  id_cliente = '$id_cliente'");

        header("Location: ".BASE."cliente/editar/".$id_cliente);
    }

    
    public function deletaVeiculo($id_veiculo){
        $sql = "SELECT id_cliente FROM veiculo WHERE id_veiculo = '$id_veiculo'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$this->db->query("DELETE FROM veiculo WHERE id_veiculo = '$id_veiculo'");

			return $sql['id_cliente'];
		}
        
        
    }



    public function updateVeiculo($nome_veiculo, $placa, $iccid, $imei, $numero_chip, $operadora, $modelo, $boleto, $dados_de_acesso, $id_veiculo){
        $sql = "SELECT id_cliente FROM veiculo WHERE id_veiculo = '$id_veiculo'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$this->db->query("UPDATE veiculo SET nome_veiculo = '$nome_veiculo', placa = '$placa', iccid = '$iccid', imei = '$imei', numero_chip = '$numero_chip', operadora = '$operadora', modelo = '$modelo', boleto = '$boleto', dados_de_acesso = '$dados_de_acesso' WHERE id_veiculo = '$id_veiculo'");

			return $sql['id_cliente'];
		}
		
    }
    

    //pesquisa

    public function getVeiculosPesquisa($s='') {
		$array = array();

		if(!empty($s)) {
			// where da busca
            $sql = "SELECT cliente.nome_cliente, cliente.contato, veiculo.nome_veiculo, veiculo.placa, veiculo.imei, veiculo.numero_chip, veiculo.operadora, veiculo.modelo, veiculo.dados_de_acesso FROM veiculo NATURAL JOIN cliente WHERE cliente.id_cliente = veiculo.id_cliente AND LOWER(placa)like LOWER(:placa) OR LOWER(cliente.nome_cliente) LIKE LOWER(:nome_cliente)";		
            	$sql = $this->db->prepare($sql);
                 
            $s = str_replace(' ', '%', '%'.$s.'%');
            $sql->bindValue(":placa", $s); //da busca
			$sql->bindValue(":nome_cliente", $s); //da busca
			$sql->execute();
	
        }else{
            $sql = "SELECT veiculo.id_veiculo, cliente.nome_cliente, cliente.contato, veiculo.nome_veiculo, veiculo.placa, veiculo.imei, veiculo.numero_chip, veiculo.operadora, veiculo.modelo, veiculo.dados_de_acesso FROM veiculo NATURAL JOIN cliente WHERE cliente.id_cliente = veiculo.id_cliente";
            $sql = $this->db->prepare($sql);
            $sql->execute();
        }
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}



    public function deletaVeiculoPesquisar($id_veiculo){
		$sql = "DELETE FROM veiculo where id_veiculo = '$id_veiculo'";
		$this->db->query($sql);
    }






    public function updateVeiculoPesquisar($nome_veiculo, $placa, $iccid, $imei, $numero_chip, $operadora, $modelo, $boleto, $dados_de_acesso, $id_veiculo){
        $this->db->query("UPDATE veiculo SET nome_veiculo = '$nome_veiculo', placa = '$placa', iccid = '$iccid', imei = '$imei', numero_chip = '$numero_chip', operadora = '$operadora', modelo = '$modelo', boleto = '$boleto', dados_de_acesso = '$dados_de_acesso' WHERE id_veiculo = '$id_veiculo'");
    }



}