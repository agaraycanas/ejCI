<script type="text/javascript">
	var x;
	
	function accionAJAX() {
		var texto = x.responseText;
		document.getElementById("idDiv").innerHTML = texto;
	}
	
	function f() {
		x = new XMLHttpRequest();
		x.open("GET","<?=base_url().'t4/ej1/a?nombre='?>"+document.getElementById('idNombre').value,true);
		//x.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		x.send();
		
		x.onreadystatechange = function() {
			if (x.readyState==4 && x.status==200) {
				accionAJAX();
			}
		}
	}
</script>


<div class="container">
	<h1>Tema 4 - Ejercicio 1</h1>
	
	<h1>Saludador</h1>

	<form action="#" onsubmit="f()">
		Introduce tu nombre
		<input id="idNombre" type="text"/>
		<br/>
		<div id="idDiv"></div>
		<input type="submit" value="Saludar"/>
	</form>	
</div>