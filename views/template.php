<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>Rastreio</title>

    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet"> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
     
   
	<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/template.css" />

    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/jquery.inputmask.bundle.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
	<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
    <style>
    body {
        padding-top: 70px;
    
	}
    </style>



</head>

<body>

  
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
         
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/rastreio">Rastreio</a>
            </div>
         
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo BASE; ?>cliente">Clientes</a></li>
                    <li><a href="<?php echo BASE; ?>pesquisar">Pesquisar Veículo</a></li>
                    <li><a href="<?php echo BASE; ?>usuarios">Usuários</a></li>
                    <li><a href="<?php echo BASE; ?>login/logout">Sair</a></li>

                </ul>



                
            </div>
            
       
        </div>
        
     
    </nav>

  
    <div class="container">

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

    </div>

    
        <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>



        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
         <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>



        
        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
        
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
		   
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>  







        <script>
//detectando cpf ou cnpj automatico.
var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('#cpf_cnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
}

$('#cpf_cnpj').length > 11 ? $('#cpf_cnpj').mask('00.000.000/0000-00', options) : $('#cpf_cnpj').mask('000.000.000-00#', options);
</script>        
 

<script>
$("#contato").mask("(99)99999-9999");
$("#contato2").mask("(99)99999-9999");
$("#numero_chip").mask("(99)99999-9999");

$("#placa").mask("AAA-9999");
$("#cep").mask("99999-999");

</script>



</body>

</html>