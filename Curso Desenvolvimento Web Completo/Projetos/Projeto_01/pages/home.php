<section class="banner-container">
	<?php
		$slides = Panel::pullDinamic('tb_site.slides', '`order_id` ASC', 4);
		foreach($slides as $key => $value){
	?>
		<div style="background-image: url('<?php echo INCLUDE_PATH_PANEL; ?>uploads/<?php echo $value['slide']; ?>');" class="banner-single"></div><!-- Banner-single -->
	<?php } ?>
	<div class="overlay"></div><!-- Overleay -->
	<div class="center">

		<form method="POST">
			<h2>Qual o seu Melhor E-mail?</h2>
			<input type="email" required name="email" autocomplete="off">
			<input type="hidden" name="indentificador" value="form_home">
			<input type="submit" value="Cadastrar!" name="acao">
		</form>	
	</div><!-- Center -->
	<div class="bullets"></div><!-- Bullets -->
</section><!-- Section Principal -->

<section id="autor" class="descricao-autor">
	<div class="center">
		<div class="w50 left">
			<h2><?php echo $infoSite['nome']; ?></h2>
			<p><?php echo $infoSite['descricao']; ?></p>
		</div><!-- w50 -->
		<div class="w50 left">
			<img class="right" src="<?php echo INCLUDE_PATH; ?>images/desenvolvedor.jpeg" alt="Foto do Desenvolvedor "/>
		</div><!-- w50 -->
		<div class="clear"></div><!-- Clear -->
	</div><!-- Center -->
</section><!-- Sessão de descrição do Autor -->
<section id="especialidade" class="especialidades">
	<div class="center">
		<h2 class="title">Especialidades</h2>
		<div class="w33 left box-especialidade">
			<h3>
			<div class="svg" style="background-image: url('<?php echo INCLUDE_PATH; ?>images/icons/<?php echo $infoSite['icone1']; ?>');"></div>
			</h3>
			<h4>CSS 3</h4>
			<p><?php echo $infoSite['descricao1']; ?></p>
		</div><!-- Box-especialidade -->

		<div class="w33 left box-especialidade">
			<h3>
				<div class="svg" style="background-image: url('<?php echo INCLUDE_PATH; ?>images/icons/<?php echo $infoSite['icone2']; ?>');"></div>
			</h3>
			<h4>HTML 5</h4>
			<p><?php echo $infoSite['descricao2']; ?></p>
		</div><!-- Box-especialidade -->

		<div class="w33 left box-especialidade">
			<h3>
			<div class="svg" style="background-image: url('<?php echo INCLUDE_PATH; ?>images/icons/<?php echo $infoSite['icone3']; ?>');"></div>
			</h3>
			<h4>JavaScript</h4>
			<p><?php echo $infoSite['descricao3']; ?></p>
		</div><!-- Box-especialidade -->
		<div class="clear"></div><!-- Clear -->
	</div><!-- Center -->
</section><!-- Section - Especialidades -->
<section class="extras">
	<div class="center">
		<div id="depoimentos" class="w50 left depoimentos-container">
			<h2 class="title">Depoimentos dos nossos clientes</h2>
			<?php
				$depoimentos = Panel::pullDinamic('tb_site.depoimentos', '`order_id` ASC', 3);
				foreach($depoimentos as $key => $value){
			?>
			<div class="depoimento-single">
				<p class="depoimento-descricao">"<?php echo $value['depoimentos']; ?>"</p>
				<p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
			</div><!-- Depoimento-single -->
			<?php } ?>
		</div><!-- w50 -->

		<div id="servico" class="w50 left sevicos-container">
			<h2 class="title">Serviços</h2>
			<div class="servico">
				<ul>
					<?php
						$servico = Panel::pullDinamic('tb_site.servicos', '`order_id` ASC', 3);
						foreach($servico as $key => $value){
					?>
						<li><?php echo $value['servico']; ?></li>
					<?php } ?>
				</ul>
			</div><!-- Serviço -->
		</div><!-- w50 -->
		<div class="clear"></div><!-- Clear -->
	</div><!-- Center -->
</section><!-- Section - Extras -->