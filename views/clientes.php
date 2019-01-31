
 

<div class="panel panel-default ">
		<div class="panel-heading ">
			<div class="clearfix">
	   			<h1 class="panel-title aw-titulo-panel">Clientes</h1>
	   			<a class="btn btn-default aw-link-panel btn-default" href="<?php echo BASE; ?>cliente/adicionar"> Adicionar Cliente</a>
	   		
			</div>
	   	</div>

		   <fieldset>
	<form method="GET">
		<input type="text" class="form-control form-control-lg" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>" placeholder="Pesquisar: Nome Cliente" style="width:100%;height:40px;font-size:18px;" />
	</form>
</fieldset>
<br/><br/>
	   	
	   	<div class="panel-body ">
		   <div class="table-responsive table-striped ">

	   		<table id="tabela" name="tabela" class="table" >
			   
	   			<thead>
	   				<tr>
	   				 

	   					<th class="text-center col-md-4">Nome</th>
						<th class="text-center col-md-3">Contatos</th>
						<th class="text-center col-md-3">Ações</th>

				<!--		<th class="text-center col-md-3">CPF</th> -->
						
	   					
	   					
	   				
	   				</tr>


	   			</thead>

				 <?php if($cliente != 0){ ?>
                    <?php foreach ($cliente as $cliente): ?>
	   			<tbody>
	   				<tr>
 
					   <td> <?php echo $cliente['nome_cliente']; ?></td>
					   <td> <?php echo $cliente['contato'].' / '.$cliente['contato2']; ?></td>
					 
 
	   					<td class="text-center">

                         
						  <a class="btn btn-warning" href="<?php echo BASE; ?>cliente/editar/<?php echo $cliente['id_cliente']; ?>">+ Informações</a>
						 

	   					</td>
 						   
	   				</tr>
							 
					   <?php endforeach; ?>
                       <?php } ?>
	   				
	   			</tbody>
	   		</table>
			   </div>
	   	</div>
	</div>


