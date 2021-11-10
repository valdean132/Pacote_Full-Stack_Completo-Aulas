<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg');" class="banner-single"></div><!-- Banner-single -->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form2.jpg');" class="banner-single"></div><!-- Banner-single -->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form3.jpg');" class="banner-single"></div><!-- Banner-single -->

	<div class="overlay"></div><!-- Overleay -->
	<div class="center">
		<?php
			if(isset($_POST['acao'])){
				// Enviei o formulário
				if($_POST['email'] != ''){
					$email = $_POST['email'];
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						// Tudo certo, é um e-mail...
						// Só enviar
						$mail = new Email(
							'smtp.titan.email', 
							'teste@valdeansouza.com', 
							'1598753', 
							'Valdean'
						);
						$mail->addAdress('contato@valdeansouza.com', 'valdean');
						$corpo = "E-mail cadastrado na home do site: </hr>$email";
						$info = [
							'assunto' => 'Um novo E-mail cadastrado no site!',
							'corpo' => $corpo
						];
						$mail->formatarEmail($info);
						if($mail->enviarEmail()){
							echo "<script>alert('O E-mail enviado com sucesso!')</script>";
						}else{
							echo "<script>alert('Algo deu Errado.')</script>";
						}
					}else{
						echo "<script>alert('O E-mail inserido não é válido')</script>";
					}
				}else{
					echo "<script>alert('Campo E-mail não pode ser vazio')</script>";
				}

			}
		?>
		<form method="POST">
			<h2>Qual o seu Melhor E-mail?</h2>
			<input type="email" required name="email" autocomplete="of">
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
			<div class="depoimento-single">
				<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est doloribus rem quae cupiditate quis magnam nostrum tempore suscipit ipsum neque voluptas eaque beatae, pariatur facere consequuntur ex. Quae, ratione alias."</p>
				<p class="nome-autor">Lorem Ipson</p>
			</div><!-- Depoimento-single -->

			<div class="depoimento-single">
				<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est doloribus rem quae cupiditate quis magnam nostrum tempore suscipit ipsum neque voluptas eaque beatae, pariatur facere consequuntur ex. Quae, ratione alias."</p>
				<p class="nome-autor">Lorem Ipson</p>
			</div><!-- Depoimento-single -->

			<div class="depoimento-single">
				<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est doloribus rem quae cupiditate quis magnam nostrum tempore suscipit ipsum neque voluptas eaque beatae, pariatur facere consequuntur ex. Quae, ratione alias."</p>
				<p class="nome-autor">Lorem Ipson</p>
			</div><!-- Depoimento-single -->
		</div><!-- w50 -->

		<div id="servico" class="w50 left sevicos-container">
			<h2 class="title">Serviços</h2>
			<div class="servico">
				<ul>
					<li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, facilis! Unde et atque molestias! Accusantium incidunt sequi iusto quam? Recusandae quae placeat veniam error voluptatem maiores quod consequatur quidem rerum.</li>
					<li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, facilis! Unde et atque molestias! Accusantium incidunt sequi iusto quam? Recusandae quae placeat veniam error voluptatem maiores quod consequatur quidem rerum.</li>
					<li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, facilis! Unde et atque molestias! Accusantium incidunt sequi iusto quam? Recusandae quae placeat veniam error voluptatem maiores quod consequatur quidem rerum.</li>
				</ul>
			</div><!-- Serviço -->
		</div><!-- w50 -->
		<div class="clear"></div><!-- Clear -->
	</div><!-- Center -->
</section><!-- Section - Extras -->