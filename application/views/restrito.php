<main>
	<div id="ctt">
	<h1> Restrito </h1>
	<?php if($msgerro){ echo "<p> Login ou senha incorreta. </p>"; } ?>
		<form action="<?php echo base_url();?>restrito/auth" method="POST">
			<fieldset id="rest" class="entrar">
				<p>Login:
					<label>
						<input type="text" name="email" maxlength="100" autofocus tabindex="9">
					</label>
				</p>
				<p> Senha:
					<label>
						<input type="password" name="senha" maxlength="10" tabindex="10">
					</label>
				</p>
				<input type="submit" class="btn" name="enviar" tabindex="11">
			</fieldset>
		</form>
	</div>
</main>