<div class="container">
	<h1>Ej 18 - DOS</h1>
	
	<h3>Escoge una opción</h3>
	
	<form action="<?=base_url()?>t2/ej18/3">
		<?php $s=true?>
		<?php for ($i=1;$i<=$_GET['nOP'];$i++):?>
			<input type="radio" id="id-<?=$i?>" name="n" value="<?=$i?>" <?= ($s?'checked="checked"':'')?>/>
			<label for="id-<?=$i?>"><?=$etiqueta[$i-1]?></label>
			<br/>
			<?php $s = false?>
		<?php endfor;?>
		<input type="submit"/>
	</form>
</div>