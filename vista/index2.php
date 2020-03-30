<?php
	session_start();
	$examen = "b";
	$_SESSION['examen'] = $examen;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PROMO UPSA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<style>
.button {
  background-color: #FFBF00; /* Green */
  border: none;
  color: white;
  font-weight: bold;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
}
.padre {
  margin: 1rem;
  padding: 1rem;
  border: 2px ;
  /* IMPORTANTE */
  text-align: center;
}

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 40px;}
.button5 {border-radius: 50%;}
.p{
	color:red;
	font-weight:bold;
	font-size: 9px;
}
.p2 {border-radius: 50%;}

</style>
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/logo.png" alt="">
			</div>
            <form action="/promoupsa1/controlador/MainnControladordelosexam.php" method="POST">
            	<div class="form-header">
            		<a href="#">#Promo UPSA cuestionario online</a>
            		<h3>Cuestionario de Ingenieria Informatica administrativa y/o de Sistema </h3>
            	</div>
            	<div id="wizard">
	                <h4></h4>
	                <section>
	                	<h3 align="center">Create un Grupo o si ya tienes uno entra con ese nombre de grupo!!</h3>
	                	<div class="form-row">
	                    		<label for="">
	                    		Nombre del grupo:
	                    		</label>
	                    		<div class="form-holder">
	                    			<input type="text" class="form-control" name="grupo" id ="grupo"required><br>
	                    		</div>
	                    	</div>                  
	                    <div class="padre"> <button class="button button4 ">Ingresar</button></div>
	                </section>
            	</div>
            </form>
		</div>
</body>
</html>
