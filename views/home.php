



<center>

<h1> Seja Bem vindo!</h1>
<br/><br/>

<h3>   </h3>

<?php  
     $sql = "SELECT COUNT(*) as c FROM cliente";
     $sql = $this->db->query($sql);
            $sql = $sql->fetch();
        //    echo $sql['c'];
 


?>
 
</center>
 <!------ Include the above in your HEAD tag ---------->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
 <!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

<div class="container">
	<div class="row">
	    <div class="col-md-6">
		<!--Card--><br>
            <div class="card">
                <!--Card image-->
                <center> <p id="numeral" name="numeral" > <?php echo $sql['c'] ?> </h1> </center>
            
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <center> <h4 class="card-title">Clientes Cadastrados</h4> </center>
                    <!--Text-->
                     
                   <center> <a href="<?php echo BASE; ?>cliente" class="btn btn-primary"> <i class="fas fa-th-list"> </i> CLIENTES</a> </center>
                    

                </div>
            </div>
        <!--/.Card-->
        </div>
        
        <div class="col-md-6">
		<!--Card--><bR>
        <div class="card">
                <!--Card image-->
				
				<?php  
     $sql = "SELECT COUNT(*) as v FROM veiculo";
     $sql = $this->db->query($sql);
            $sql = $sql->fetch();
        //    echo $sql['c'];
 


?>

                 <center> <p id="numeral" name="numeral" > <?php echo $sql['v'] ?> </h1> </center>
            
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <center> <h4 class="card-title">Veiculos Cadastrados</h4> </center>
                    <!--Text-->
                     
                   <center> <a href="<?php echo BASE; ?>pesquisar" class="btn btn-primary"> <i class="fas fa-th-list"> </i> VEICULOS </a> </center>
                    

                </div>
            </div>
        <!--/.Card-->
        </div>


     
        
        </div>
	</div>
</div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>