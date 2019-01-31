<form class="form-horizontal" method="POST">

<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Cadastro do Veiculo</h1>
		</div>
		
		<div class="panel-body">






			<div class="form-group">
				<label for="nome_veiculo" class="col-sm-2 control-label">Veiculo</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="nome_veiculo" name="nome_veiculo" value="<?php echo $veiculo['nome_veiculo']; ?>"/>
				</div>
			</div>

		   <div class="form-group">
				<label for="placa" class="col-sm-2 control-label">Placa</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="placa" name="placa" value="<?php echo $veiculo['placa']; ?>"/>
				</div>
			</div>
		 
			<div class="form-group">
				<label for="iccid" class="col-sm-2 control-label">ICCID</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="iccid" name="iccid" value="<?php echo $veiculo['iccid']; ?>"/>
				</div>
			</div>

			<div class="form-group">
				<label for="imei" class="col-sm-2 control-label">IMEI</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="imei" name="imei" value="<?php echo $veiculo['imei']; ?>"/>
				</div>
			</div>

			<div class="form-group">
				<label for="numero_chip" class="col-sm-2 control-label">Nº Chip</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="numero_chip" name="numero_chip" value="<?php echo $veiculo['numero_chip']; ?>"/>
				</div>
			</div>

			<div class="form-group">
				<label for="operadora" class="col-sm-2 control-label">Operadora</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="operadora" name="operadora" value="<?php echo $veiculo['operadora']; ?>"/>
				</div>
			</div>


			<div class="form-group">
				<label for="modelo" class="col-sm-2 control-label">Modelo</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $veiculo['modelo']; ?>"/>
				</div>
			</div>


			<div class="form-group">
				<label for="boleto" class="col-sm-2 control-label">Boleto</label>
				<div class="col-sm-3"> 
					<input type="date" class="form-control" id="boleto" name="boleto" value="<?php echo $veiculo['boleto']; ?>"/>
				</div>
			</div>


			<div class="form-group">
				<label for="dados_de_acesso" class="col-sm-2 control-label">Dados de acesso</label>
				<div class="col-sm-6"> 
				<textarea class="form-control" id="dados_de_acesso" rows="3" name="dados_de_acesso"><?php echo $veiculo['dados_de_acesso']; ?></textarea>
					
				</div>
			</div>

	 
			<div class="form-group container">
				<div class="col-md-12">
				<label for="dados_de_acesso" class="col-sm-2 control-label"></label>
					<button type="submit" class="btn btn-primary">Alterar veiculo</button>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#excluir_cliente">
			       Excluir Veiculo</button>
				</div>
				 

			</div>

			<div class="form-group">

			</div>

			
		</div>



</form>


	
<!-- Modal -->
<div class="modal fade" id="excluir_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <!--  <h5 class="modal-title" id="excluir_cliente">ATENÇÃO!</h5>-->
		<h4 class="modal-title">Aviso!</h4>
       
      </div>
      <div class="modal-body">
	  <div class="alert alert-danger" role="alert">
<p><strong>Deseja realmente deletar esse veiculo? <br></strong><br>
<p> </p>
<p>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span aria-hidden="true">&times;</span> Cancelar </button>
		<a class="btn btn-warning" href="<?php echo BASE; ?>cliente/deletaVeiculo/<?php echo $veiculo['id_veiculo']; ?>">DELETAR</a>

       </div>
    </div>
  </div>
</div>