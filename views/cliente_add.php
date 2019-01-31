

<form class="form-horizontal" method="POST">

<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Novo Cliente</h1>
		</div>
		
		<div class="panel-body">


			<div class="form-group">
				<label for="nome_cliente" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-3"> 
					<input type="text" class="form-control" id="nome_cliente" name="nome_cliente" required />
				</div>
			</div>

		   
		   <div class="form-group">
				<label for="contato" id=""class="col-sm-2 control-label">Telefone</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" placeholder="Ex.: (00) 00000-0000" name="contato" id="contato" required/>
				</div>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" placeholder="Ex.: (00) 00000-0000" name="contato2" id="contato2"/>
				</div>
			</div>
  <div class="form-group">
				<label for="email" class="col-sm-2 control-label">E-mail</label>
				<div class="col-sm-4"> 
					<input type="email" class="form-control" id="email" name="email"/>
				</div>
			</div>
	    <div class="form-group">
				<label for="cpf_cnpj" id="cpf_cnpj_label" class="col-sm-2 control-label">CPF / CNPJ</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj"/>
				</div>
			</div>

<div class="panel panel">
	 <div class="panel-heading">
			<h1 class="panel-title">Endereço</h1>
		</div>
	</div>		 
	<div class="row col-md-12"> 
    <div class="form-group">
				<label for="rua" class="col-sm-2 control-label">Rua</label>
				<div class="col-sm-5"> 
					<input type="text" class="form-control col-sm-1" id="rua" name="rua"/>
				
				</div>
				<label for="numero_end" class="col-sm-1 control-label">Nº</label>

<div class="col-sm-2"> 
<input type="text" class="form-control col-sm-1" id="numero_end" name="numero_end"/>
</div>
			
			</div>

      </div> 

      	<div class="row col-md-12"> 
    <div class="form-group">
				<label for="bairro" class="col-sm-2 control-label">Bairro</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="bairro" name="bairro"/>
				</div>

              <label for="cidade" class="col-sm-1 control-label">Cidade</label>
			<div class="col-sm-4"> 
					<input type="text" class="form-control" id="cidade" name="cidade"/>
				</div>
			</div>
			
      </div> 
  	<div class="row col-md-12"> 
    <div class="form-group">
				<label for="cep" class="col-sm-2 control-label">CEP</label>
				<div class="col-sm-4"> 
					<input type="text" class="form-control" id="cep" name="cep"/>
				</div>

              <label for="uf" class="col-sm-1 control-label">Estado</label>
			<div class="col-sm-4"> 
					<select class="form-control" id="uf" name="uf">
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>
				</div>
			</div>
			
      </div> 



			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</div>

		</div>







</form>

