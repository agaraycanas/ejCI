<div class="container">
	<h2 class="alert alert-<?=$severidad?>">
	<?=$mensaje?>
	</h2>
	
	<form action="<?=base_url().$link?>">
		<input type="submit" value="Volver"/>
	</form>
</div>