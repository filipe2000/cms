<div class="home_banner" 
style="background-image: url('<?php echo BASE.'assets/images/'.$this->config['home_banner']; ?>');">
</div>
<div class="home_banner_txt">
	<div class="hbt"><?php echo $this->config['home_welcome'];	 ?></div>
</div>
<div class="home_depo">
	<?php 
	foreach($depoimentos as $depitem){
	//seguindo como a aula, mas 'depoimentos' é array com sub arrays de registro
	//pela lógica seria $dados['depoimentos']['nome']
       	echo $depitem['nome'].'<br>'.$depitem['texto'].'<hr>';
	}
	/* de qualquer jeito a variável $depoimentos é indefinida ou nulla, ja feito teste dos dados no módulo homeController exibe eles, já fiz até teste com  extract(var_array) mas aqui não funciona.
	*/       
	?>
</div>

	<div class="home_cta"><!-- call to action -->
		Deseja conferir nossos serviços?<br/>
		<a href="<?php echo BASE.'servicos'; ?>">Nossos Serviços</a>
	</div>
