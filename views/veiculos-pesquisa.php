<div class="panel panel-default">
		<div class="panel-heading">
			<div class="clearfix">
	   			<h1 class="panel-title aw-titulo-panel">Pesquisa Veículo</h1>
	   			<a class="btn btn-link aw-link-panel" href="<?php echo BASE; ?>cliente/adicionar"> Adicionar Cliente</a>
	   		
			</div>
	   	</div>

           <fieldset>
	<form method="GET">
		<input type="text"  class="form-control form-control-lg" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>" placeholder="Digite o veiculo ou sua placa" style="width:100%;height:40px;font-size:18px;" />
	</form>
</fieldset>
<br/><br/>
	   	<div class="panel-body">
		   <div class="table-responsive">
	   		<table class="table table-bordered table-striped">
	   			<thead>
	   				<tr>
					   <th class="text-center col-md-4">Nome Cliente</th>
					   <th class="text-center col-md-4">Contato</th>
	   					<th class="text-center col-md-4">Nome veículo</th>
						<th class="text-center col-md-3">Placa</th>
                        <th class="text-center col-md-3">Imei</th>
                        <th class="text-center col-md-3">Nº Chip</th>
                        <th class="text-center col-md-3">Operadora</th>
                        <th class="text-center col-md-3">Modelo</th>
						<th class="text-center col-md-3">Dados de acesso</th>
	   					
	   					
	   				
	   				</tr>


	   			</thead>

				 <?php if($list != 0){ ?>
                    <?php foreach ($list as $item): ?>
	   			<tbody>
	   				<tr>
					   <td> <?php echo $item['nome_cliente']; ?></td>
					   <td> <?php echo $item['contato']; ?></td>
					   <td> <?php echo $item['nome_veiculo']; ?></td>
					   <td> <?php echo $item['placa']; ?></td>
                       <td> <?php echo $item['imei']; ?></td>
					   <td> <?php echo $item['numero_chip']; ?></td>
                       <td> <?php echo $item['operadora']; ?></td>
                       <td> <?php echo $item['modelo']; ?></td>
                       <td> <?php echo $item['dados_de_acesso']; ?></td>
					   <td>
					   <a class="btn btn-warning" href="<?php echo BASE; ?>pesquisar/editarVeiculoPesquisar/<?php echo $item['id_veiculo']; ?>">Alterar/Visualizar</a>
                      </td>
	   				</tr>

					   <?php endforeach; ?>
                       <?php } ?>
	   				
	   			</tbody>
	   		</table>
			   </div>
	   	</div>
	</div>

<!--foco no formulario -->
<script type="text/javascript">
document.getElementById("busca").focus();
</script>





