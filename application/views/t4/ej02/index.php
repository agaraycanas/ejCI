<script type="text/javascript">
	var x;
	
	function accionAJAX() {
		var texto = x.responseText;
		document.getElementById("idDiv").innerHTML = texto;
	}
	
	function f() {
		x = new XMLHttpRequest();
		x.open("GET","<?=base_url().'t4/ej2/a?ccaa='?>"+document.getElementById('idCCAA').value,true);
		x.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		x.send();
		
		x.onreadystatechange = function() {
			if (x.readyState==4 && x.status==200) {
				accionAJAX();
			}
		}
	}
</script>


<div class="container">
	<h1>Tema 4 - Ejercicio 2</h1>
	
	<h1>Comunidades autónomas</h1>
	
	<form>
	ccaa
	<select onchange="f()" id="idCCAA">
		<option>Andalucía</option>
		<option>Aragón</option>
	</select>
	<br/>
	
	provincias
	<div id="idDiv">
	<select>
		<option>Almería </option>
		<option>Cádiz</option>
	</select>
	</div>
	<br/>
	</form>
	
	<h4>Escoge una comunidad autónoma</h4>
	<p>Observa el cambio de provincias vía AJAX</p>
</div>