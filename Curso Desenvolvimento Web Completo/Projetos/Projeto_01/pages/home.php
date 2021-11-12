<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg');" class="banner-single"></div><!-- Banner-single -->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form2.jpg');" class="banner-single"></div><!-- Banner-single -->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form3.jpg');" class="banner-single"></div><!-- Banner-single -->

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
			<h2>Valdean P. Souza</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad distinctio perferendis laudantium totam ipsa sapiente quibusdam! Autem quis consectetur nulla reprehenderit ut quidem neque, repudiandae fugit ducimus, odio amet minus. Autem quis consectetur nulla reprehenderit ut quidem neque, repudiandae fugit ducimus, odio amet minus.</p>
			<br>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad distinctio perferendis laudantium totam ipsa sapiente quibusdam! Autem quis consectetur nulla reprehenderit ut quidem neque, repudiandae fugit ducimus, odio amet minus. Autem quis consectetur nulla reprehenderit ut quidem neque, repudiandae fugit ducimus, odio amet minus.</p>
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
			<div class="svg" style="background-image: url('<?php echo INCLUDE_PATH; ?>images/icons/css.svg');"></div>
			</h3>
			<h4>CSS 3</h4>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem minus velit quasi dolore, omnis magni sit laboriosam eos molestiae eaque? Repudiandae, ea est exercitationem expedita perferendis aliquid itaque repellat ullam?</p>
		</div><!-- Box-especialidade -->

		<div class="w33 left box-especialidade">
			<h3>
				<div class="svg" style="background-image: url('<?php echo INCLUDE_PATH; ?>images/icons/html.svg');"></div>
			</h3>
			<h4>HTML 5</h4>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem minus velit quasi dolore, omnis magni sit laboriosam eos molestiae eaque? Repudiandae, ea est exercitationem expedita perferendis aliquid itaque repellat ullam?</p>
		</div><!-- Box-especialidade -->

		<div class="w33 left box-especialidade">
			<h3>
			<div class="svg" style="background-image: url('<?php echo INCLUDE_PATH; ?>images/icons/javascript.svg');"></div>
			</h3>
			<h4>JavaScript</h4>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem minus velit quasi dolore, omnis magni sit laboriosam eos molestiae eaque? Repudiandae, ea est exercitationem expedita perferendis aliquid itaque repellat ullam?</p>
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