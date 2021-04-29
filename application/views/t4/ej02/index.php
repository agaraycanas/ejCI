<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="<?=base_url()?>assets/img/icons/favicon.png"
    	type="image/png">
    
    <link rel="stylesheet"
    	href="<?=base_url()?>assets/css/bootstrap.min.css">
    
    <script src="<?=base_url()?>assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <title>CI Ejercicios</title>

	<script type="text/javascript">
	var x;
	var y;
	
	function rellenarCCAAajax() {
		var texto = y.responseText;
		document.getElementById("idCCAA").innerHTML = texto;
		
		cambiarProvincia();
	}
	
	function rellenarCCAA() {
		y = new XMLHttpRequest();
		y.open("GET","<?=base_url().'t4/ej2/X-rccaa'?>",true);
		y.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		y.send();
		
		y.onreadystatechange = function() {
			if (y.readyState==4 && y.status==200) {
				rellenarCCAAajax();
			}
		}
	}
	
	function cambiarProvinciaAJAX() {
		var texto = x.responseText;
		document.getElementById("idProvincia").innerHTML = texto;
	}
	
	function cambiarProvincia() {
		x = new XMLHttpRequest();
		x.open("GET","<?=base_url().'t4/ej2/X-rp?ccaa='?>"+document.getElementById('idCCAA').value,true);
		x.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		x.send();
		
		x.onreadystatechange = function() {
			if (x.readyState==4 && x.status==200) {
				cambiarProvinciaAJAX();
			}
		}
	}
	
</script>


</head>

<body onload="rellenarCCAA()">

	<header class="container"> </header>

	<nav
		class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">

		<a class="navbar-brand" href="<?=base_url()?>"> <img
			src="<?=base_url()?>assets/img/icons/casa.png" alt="INICIO"
			style="width: 40px;">
		</a>

		<ul class="navbar-nav">
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
				data-toggle="dropdown" href="#"> Tema 2 </a>

				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?=base_url()?>t2/ej10">Ej.10</a> <a
						class="dropdown-item" href="<?=base_url()?>t2/ej11">Ej.11</a>
				</div></li>
		</ul>
	</nav>


	<div class="container">
		<h1>Tema 4 - Ejercicio 2</h1>

		<h1>Comunidades autónomas</h1>

		<form>
			CCAA 
			<select onchange="cambiarProvincia()" id="idCCAA">
			</select> 
			<br /> 
			
			PROVINCIAS
			<select id="idProvincia">
			</select>
			<br />
		</form>

		<h4>Escoge una comunidad autónoma</h4>
		<p>Observa el cambio de provincias vía AJAX</p>
	</div>

</body>
</html>