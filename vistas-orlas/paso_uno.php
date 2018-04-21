<!DOCTYPE html>
<html>
<head>
	<title>Paso 1 - Rellenar información básica de la Orla</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="box-header">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="button-box1">
				<div class="number-box">
					<h3 class="number-text"><span>1</span></h3>
				</div>
				<div class="paragraph-box">
					<p class="paragraph">
						Rellenar información básica de la Orla
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="button-box">
				<div class="number-box">
					<h3 class="number-text"><span>2</span></h3>
				</div>
				<div class="paragraph-box">
					<p class="paragraph">
						Añadir a personas
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="button-box">
				<div class="number-box">
					<h3 class="number-text"><span>3</span></h3>
				</div>
				<div class="paragraph-box">
					<p class="paragraph">
						Elegir diseño
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="button-box">
				<div class="number-box">
					<h3 class="number-text"><span>4</span></h3>
				</div>
				<div class="paragraph-box">
					<p class="paragraph">
						Vista previa y registro
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<center>
				<img class="img-responsive image-group" id="foto-a" src="/img/group-bottom.png">
			</center>
			<center>
				<img class="img-responsive image-group" id="foto-b" src="/img/group-bottom2.png">
			</center>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="box-paso1">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<form action="/tu-orla/datos" method="post">
					<div class="form-group">
						<label for="nombre" class="titulo-style">Nombre:</label>
						<input type="text" class="form-control" name="orla[nombre]" id="nombre" required>
					</div>
					<div class="form-group">
						<label for="colegio" class="titulo-style">Centro Educativo:</label>
						<input type="text" class="form-control" name="orla[colegio]" id="colegio" required>
					</div>
                	<div class="form-group">
					  <label for="inicio_orla" class="titulo-style">Inicio:</label>
					   <select required name="orla[inicio]">
					    <?php foreach (Orla::getPosiblesCursosInicio() as $key => $value): ?>
					      <option value="<?= $key ?>"><?= $value ?></option>
					    <?php endforeach; ?>                                        
					   </select>
					</div>
					<div class="form-group label-floating is-select">
                   	  <label class="titulo-style">Soy un:</label>
                      <select required name="tipo">
                        <?php foreach (OrlaUsuario::$tipos as $key => $value): ?>
                          <option value="<?= $key ?>"><?= ucfirst($value) ?></option>
                        <?php endforeach; ?>                                        
                      </select>
                	</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="curso" class="titulo-style">Curso:</label>
						<input type="text" class="form-control" name="orla[curso]" id="curso" required>
					</div>
					<div class="form-group">
						<label for="localidad" class="titulo-style">Localidad:</label>
						<input type="text" class="form-control" name="orla[localidad]" id="localidad" required>
					</div>
					
					<div class="form-group">
					  <label for="fin_orla" class="titulo-style">Fin:</label>
					  <select required name="orla[fin]">
					    <?php foreach (Orla::getPosiblesCursosFin() as $key => $value): ?>
					      <option value="<?= $key ?>"><?= $value ?></option>
					    <?php endforeach; ?>                                      
					  </select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrar">
					<center>
						<button type="submit" class="btn create-button">Crear</button>
					</center>
					</form>
				</div>
			</div>
		</div>
	</div>
<style>
/* Link Google Fonts */
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600');

body {
	background-color: #D1E1EC;
}

/* Estilos cabecera */
.box-heade {
	background-color: #DEDEDE;
	border-bottom: 3px solid #333;
	width: 100%;
	height: 328px;
	z-index: 999;
}
.button-box {
	background-color: #38a9ff;
	box-shadow: 2px 2px #C6C6C6;
	width: 200px;
	height: 50px;
	margin: 0 auto;
	transition: 300ms;
}
.button-box:hover {
	background-color: #888da8;
	transition: 300ms;
}
.button-box1 {
	background-color: #888da8;
	box-shadow: 2px 2px #C6C6C6;
	width: 200px;
	height: 50px;
	margin: 0 auto;
}
.number-box {
	position: absolute;
	display: inline-block;
	background-color: #fff;
	width: 50px;
	height: 50px;
}
.number-text {
	text-align: center;
	margin-top: 0px;
	font-size: 45px;
	font-family: 'Montserrat', sans-serif;
	color: #333;
	text-shadow: 1px 2px #C6C6C6;
}
.paragraph-box {
	background-color: transparent;
	position: absolute;
	display: inline-block;
	margin-left: 50px;
	width: 150px;
	height: 50px;
}
.paragraph {
	text-align: center;
	padding: 8px 5px 0px 5px;
	font-family: 'Montserrat', sans-serif;
	color: white;
	font-size: 12px;
}
.image-group {
	padding-top: 40px;
	z-index: 999;
}
/* Formulario paso 1 */
.box-paso1 {
	border: 2px dashed #bbc0d5;
	background-color: white;
	border-radius: 4px;
	padding: 30px;
	margin-top: 40px;
	width: 100%;
	height: auto;
	margin-bottom: 20px;
}
.form-control {
	border-radius: 0px;
	font-family: 'Montserrat', sans-serif;
}
.form-control:focus {
	border-color: #888;
}
.titulo-style{
	font-family: 'Montserrat', sans-serif;
	font-size: 13px;
	color: #222;
}
.create-button {
	font-family: 'Montserrat', sans-serif;
	background-color: #38a9ff;
	border-radius: 0px;
	color: #fff;
	margin-top: 30px;
	border-radius: 4px;
}
.create-button:hover {
	color: #fff;
}
/* Media Queries */
/*XS*/
@media (max-width:370px){
	.box-header {
		height: 486px;
	}
	.button-box {
		width: 280px;
		height: 50px;
		margin: 0 auto;
		margin-top: 40px;
	}
	.button-box1 {
		width: 280px;
		height: 50px;
		margin: 0 auto;
		margin-top: 40px;
		transition: 300ms;
	}
	.paragraph-box {
		background-color: transparent;
		width: 230px;
		height: 50px;
	}
	.paragraph {
		padding: 15px 0px 10px 0px ;
		font-size: 11px;
	}
	#foto-a {
		display: none !important;
	}
	.box-paso1 {
		height: 550px;
	}
}
/*SM*/
@media (min-width:370px) and (max-width:820px){
	.box-header {
		height: 511px;
	}
	.button-box {
		width: 330px;
		height: 50px;
		margin: 0 auto;
		margin-top: 40px;
	}
	.button-box1 {
		width: 330px;
		height: 50px;
		margin: 0 auto;
		margin-top: 40px;
		transition: 300ms;
	}
	.paragraph-box {
		background-color: transparent;
		width: 280px;
		height: 50px;
	}
	.paragraph {
		padding: 10px;
	}
	#foto-a {
		display: none;
	}
}
/*MD*/
@media (min-width:821px) and (max-width:992px){
	#foto-b {
		display: none;
	}
}
/*LG*/
@media (min-width:993px) and (max-width:1200px){
	#foto-b {
		display: none;
	}
}
/*XL*/
@media (min-width:1201px) and (max-width:2000px){
	#foto-b {
		display: none;
	}
}
</style>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>