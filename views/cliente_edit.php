 
 

<form class="form-horizontal" method="POST">




<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Cliente:  <?php echo mb_strtoupper($cliente['nome_cliente']);  ?> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#excluir_cliente">
			       Excluir Cliente
</button>
 </h1>
			
			 
		</div>
		<div class="row">
			<div class="col-sm-10">
		<div class="panel-body">


			<div class="form-group">
				<label for="nome_cliente" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="<?php echo $cliente['nome_cliente']; ?>" required/>
				</div>
			</div>

		   
		   <div class="form-group">
				<label for="contato" class="col-sm-2 control-label">Contato</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control cel-sp-mask" id="contato" name="contato" value="<?php echo $cliente['contato']; ?>" required/>
				</div>
				<div class="form-group">
				<label for="contato2" class="col-sm-1	 control-label">Contato</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control cel-sp-mask" id="contato2" name="contato2" value="<?php echo $cliente['contato2']; ?>"/>
				</div>
			</div>

			

			</div>
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">EmaiL</label>
				<div class="col-sm-4"> 
					<input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente['email']; ?>"/>
				</div>
			 
			</div>

   <div class="form-group">
				<label for="cpf_cnpj" id="cpf_cnpj_label" class="col-sm-2 control-label">CPF/CNPJ</label>
				<div class="col-sm-4"> 
					<input type="text"   class="form-control" id="cpf_cnpj" name="cpf_cnpj" value="<?php echo $cliente['cpf_cnpj']; ?>"/>
 				</div>
			</div>
<hr>
<h5>ENDEREÇO CLIENTE</h5>			
  <div class="form-group">
				<label for="rua" class="col-sm-2 control-label">Rua</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="rua" name="rua" value="<?php echo $cliente['rua']; ?>"/> 
				</div>
			</div>
            <div class="form-group">
				<label for="numero_end" class="col-sm-2 control-label">nº</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="numero_end" name="numero_end" value="<?php echo $cliente['numero_end']; ?>"/>
				</div>
			</div>
			<div class="form-group">
				<label for="bairro" class="col-sm-2 control-label">Bairro</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $cliente['bairro']; ?>"/>
				</div>
			</div>
			<div class="form-group">
				<label for="cidade" class="col-sm-2 control-label">Cidade</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cliente['cidade']; ?>"/>
				</div>
			</div>
			<div class="form-group">
				<label for="cep" class="col-sm-2 control-label">CEP</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control cep-mask" id="cep" name="cep" value="<?php echo $cliente['cep']; ?>"/>
				</div>
				<div class="form-group">
				<label for="uf" class="col-sm-1 control-label">Estado</label>
				<div class="col-sm-2"> 
					<input type="text"   maxlength="2" class="form-control" id="uf" name="uf" value="<?php echo $cliente['uf']; ?>"/>
				</div>
			</div>
			</div>

		
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</div>

		</div>

</div>




</div>


</form>



<form class="form-horizontal" method="POST">

<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Cadastro do Veiculo</h1>
		</div>
		
		<div class="panel-body">

           
			<div class="form-group col-md">
				<label for="nome_veiculo" class="col-sm-2 control-label">Veiculo</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="nome_veiculo" name="nome_veiculo" placeholder="Marca e modelo do veiculo" required />
				</div>
			</div>

		   <div class="form-group col-md">
				<label for="placa" class="col-sm-2 control-label">Placa</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" placeholder="AAA-0000"  id="placa" name="placa" />
				</div>
			</div>
		 
			<div class="form-group col-md">
				<label for="iccid" class="col-sm-2 control-label">ICCID</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="iccid" name="iccid" />
				</div>
			</div>
          
			<div class="form-group">
				<label for="imei" class="col-sm-2 control-label">IMEI</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="imei" name="imei" />
				</div>
			</div>

			<div class="form-group">
				<label for="numero_chip" class="col-sm-2 control-label">Nº Chip</label>
				<div class="col-sm-3"> 
					<input type="text"  class="form-control" id="numero_chip" name="numero_chip" />
				</div>
			</div>

			<div class="form-group">
				<label for="operadora" class="col-sm-2 control-label">Operadora</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="operadora" name="operadora" />
				</div>
			</div>


			<div class="form-group">
				<label for="modelo" class="col-sm-2 control-label">MODELO RASTREADOR</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="modelo" name="modelo" />
				</div>
			</div>


			<div class="form-group">
				<label for="boleto" class="col-sm-2 control-label">Boleto</label>
				<div class="col-sm-3"> 
					<input type="date" class="form-control" id="boleto" name="boleto" />
				</div>
			</div>


			<div class="form-group">
				<label for="dados_de_acesso" class="col-sm-2 control-label">Dados de acesso</label>
				<div class="col-sm-6"> 
				<textarea class="form-control" id="dados_de_acesso" rows="3" name="dados_de_acesso"></textarea>
					
				</div>
			</div>

	 
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Adicionar veículo</button>
				</div>
			</div>

		</div>



</form>



   	<div class="panel-body">
		   <div class="table-responsive">
	   		<table class="table table-bordered table-striped">
	   			<thead>
	   				<tr>
	   					<th class="text-center">Veículo</th>
						<th class="text-center">Placa</th>
						
						<th class="text-center">IMEI</th>
						<th class="text-center">Nº Chip</th>
						<th class="text-center">Operadora</th>
						
						<th class="text-center">Boleto até o dia</th>
					
	   				
	   				</tr>


	   			</thead>

				 <?php if($veiculo != 0){ ?>
                    <?php foreach ($veiculo as $veiculo): ?>
	   			<tbody>
	   				<tr>
					   <td> <?php echo $veiculo['nome_veiculo']; ?></td>
					   <td> <?php echo $veiculo['placa']; ?></td>
					   
					   <td> <?php echo $veiculo['imei']; ?></td>
					   <td> <?php echo $veiculo['numero_chip']; ?></td>
					   <td> <?php echo $veiculo['operadora']; ?></td>
					  
					   <td> <?php echo date("d/m/Y", strtotime($veiculo['boleto'])); ?></td>
					   
	   				
	   					<td class="text-center">

                         
						  <a class="btn btn-warning btn" href="<?php echo BASE; ?>cliente/editar_veiculo/<?php echo $veiculo['id_veiculo']; ?>">Alterar/Visualizar</a>
						  

	   					</td>
	   				</tr>

					   <?php endforeach; ?>
                       <?php } ?>
	   				
	   			</tbody>
	   		</table>
			   </div>
	   	</div>
	</div>


	
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
<p>Deseja realmente excluir o cliente? <br><strong><?php echo mb_strtoupper($cliente['nome_cliente']); ?></strong><br>
<p>A exclusão do cliente removerá todos os veiculos cadastrado no nome dele </p>
<p>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span aria-hidden="true">&times;</span> Cancelar </button>
		<a class="btn btn-warning" href="<?php echo BASE; ?>cliente/excluir/<?php echo $cliente['id_cliente']; ?>">DELETAR</a>

       </div>
    </div>
  </div>
</div>