<?php
session_start();
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

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 40px;}
.button5 {border-radius: 50%;}
.p{
	color:red;
	font-weight:bold;
	font-size: 13px;
}
.padre {
  margin: 1rem;
  padding: 1rem;
  border: 2px ;
  /* IMPORTANTE */
  text-align: center;
}
.p2 {border-radius: 50%;}

</style>
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="images/logo.png" alt="">
			</div>
            <form action="../controlador/Examen2Controlador.php" method="POST">
            	<div class="form-header">
            		<a href="#">#Promo UPSA cuestionario online</a>
            		<h3>Carrera de Ingenieria Informática y/o de Sistemas</h3>
					<h3>Nombre del Grupo : <?php echo $_SESSION['grupo'];?> </h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 26px;">
	                    	<label for="">
	                    		1-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="resp1"  class="form-control">
	                    			<option value="" selected disabled>Seleciona uno opcion</option>
									<option value="a" class="option">2</option>
									<option value="b" class="option">1</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label >
	                    		2-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="resp2"  class="form-control">
									<option value="" selected disabled>Seleciona uno opcion</option>
									<option value="a" class="option">2</option>
									<option value="b" class="option">1</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		3-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="resp3"  class="form-control">
								<option value="" selected disabled>Seleciona uno opcion</option>
									<option value="a" class="option">2</option>
									<option value="b" class="option">1</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		4-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="resp4"  class="form-control">
	                    			<option value="" selected disabled>Seleciona uno opcion</option>
									<option value="a" class="option">2</option>
									<option value="b" class="option">1</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		5-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" name="resp5" class="form-control">
	                    	</div>
	                    </div>		
	                </section>
	                
					<!-- SECTION 2 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label for="">
	                    		6-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" name="resp6" class="form-control">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		7-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="resp7" class="form-control">
									<option value="" selected disabled>Seleciona uno opcion</option>
									<option value="a" class="option">2</option>
									<option value="b" class="option">1</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		8-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" name="resp8" class="form-control">
	                    	</div>
	                    </div>	
	                    <div class="form-row" style="margin-bottom: 3.4vh">
	                    	<label for="">
	                    		9-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" name="resp9" class="form-control">
	                    	</div>
	                    </div>	
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	<label for="">
	                    		10-¿Cuánto es 1+1?
	                    	</label>
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="gender" value="1" checked>1<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="gender" value="2">2<br>
										<span class="checkmark"></span>
									</label>
									<label>
										<input type="radio" name="gender" value="3">3<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>		
	                </section>

	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label for="">
	                    		Course ID:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. abc 12345 or abc 1234L">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		Course Title:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. Intro to physic">
	                    	</div>
	                    </div>	
                     	<div class="form-row">
	                    	<label for="">
	                    		Section(s):
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" class="form-control" placeholder="Ex. 3679 or 33fa, 4295">
	                    	</div>
	                    </div>	
	                    <div class="form-row" style="margin-bottom: 38px">
	                    	<label for="">
	                    		Select Teacher:
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="" id="" class="form-control">
	                    			<option value="frances meyer" class="option">Frances Meyer</option>
									<option value="johan lucas" class="option">Johan Lucas</option>
									<option value="merry linn" class="option">Merry Linn</option>
								</select>
								<i class="zmdi zmdi-caret-down"></i>
	                    	</div>
	                    </div>	
	                    <div class="checkbox-circle" style="margin-bottom: 48px;">
							<label>
								<input type="checkbox" checked>I agree all statement in Terms & Conditions
								<span class="checkmark"></span>
							</label>
						</div>
						<div class="padre">
						<p class="p p2">Si el boton no le da, fata llenar algun dato en el formulario. </p>
						<button class="button button4" name="btn_enviar">Finalizar Cuestionario</button>
						</div>
	                </section>

            	</div>

            </form>

		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/main.js"></script>
</body>
</html>
