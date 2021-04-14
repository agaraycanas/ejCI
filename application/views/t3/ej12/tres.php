<div class="container">
    <h1>
    <?php foreach ($sumandos as $s): ?>
    	<?=$s?> +
    <?php endforeach;?>
    
    = <?=$suma?>
    </h1>
    
    <h3>
    	<a href="<?=base_url()?>t3/ej12">Volver</a>
    </h3>
</div>