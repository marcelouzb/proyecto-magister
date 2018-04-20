<!DOCTYPE html>
<html>
<head>
	<title>Paso 3 - Elegir diseño</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="box-header">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="button-box">
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
			<div class="button-box1">
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
				<img class="img-responsive image-group hide-responsive" src="/img/group-bottom.png">
			</center>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="box-paso1">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<img src="/img/orla1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					<center>
					    <div class="radio-style">
					    	<input type="radio" name="orla" value="" checked>
					    </div>
					</center>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<img src="/img/orla2.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					<center>
					    <div class="radio-style">
					    	<input type="radio" name="orla" value="">
					    </div>
					</center>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<img src="/img/orla3.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					<center>
					    <div class="radio-style">
					    	<input type="radio" name="orla" value="">
					    </div>
					</center>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrar">
					<center>
						<button type="submit" class="btn create-button">Elegir</button>
					</center>
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

/* Formulario paso 3 */
.title-diseño {
	text-align: center;
	font-family: 'Montserrat', sans-serif;
}
.title-diseño h3{
	font-size: 30px;
	color: #38a9ff;
	margin: 30px;
	margin-bottom: 60px;
}
.radio-style {
	margin-top: 20px;
}

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

.create-button {
	font-family: 'Montserrat', sans-serif;
	background-color: #38a9ff;
	border-radius: 0px;
	color: #fff;
	margin-top: 30px;
	border-radius: 4px;
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
	.show-responsive {
		padding: 30px;
		width: 300px;
	}
	.hide-responsive {
		display: none;
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
	.show-responsive {
		padding: 30px;
		width: 360px;
	}
	.hide-responsive {
		display: none;
	}
}

/*MD*/
@media (min-width:821px) and (max-width:992px){
	.show-responsive {
		display: none;
	}

}

/*LG*/
@media (min-width:993px) and (max-width:1200px){
	.show-responsive {
		display: none;
	}

}
</style>
</body>
</html>