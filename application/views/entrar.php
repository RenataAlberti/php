<main>
	<div id="ctt">
	<h1> Entrar </h1>
	<?php if($msgerro){ echo "<p> Login ou senha incorreta. </p>"; } ?>
		<form action="<?php echo base_url();?>user/auth" method="POST">
			<fieldset class="entrar">
				<p>E-mail:
					<label>
						<input type="email" name="email" maxlength="100" autofocus required tabindex="9">
					</label>
				</p>
				<p> Senha:
					<label>
						<input type="password" name="senha" maxlength="10" required tabindex="10">
					</label>
				</p>
			</fieldset>
			<input type="submit" class="btn" name="enviar" tabindex="11">
		</form>
		<a href="" class="lin" title="" tabindex="12"> Esqueci meu e-mail </a>
		<a href="" class="lin" title="" tabindex="13"> Esqueci minha senha </a>
	</div>
</main>