<main>
<script src="<?php echo base_url();?>static/js/jquery.js"></script>
<script src="<?php echo base_url();?>static/js/jquery.mask.min.js"> </script>
	<div id="ctt">
	<h1> Contato </h1>
		<form action="<?php echo base_url();?>menu/contato" method="POST">
			<fieldset class="entrar">
				<p> *Nome:
					<label>
						<input type="text" name="nome" autofocus required tabindex="9">
					</label>
				</p>
				<p> *E-mail:
					<label>
						<input type="email" name="email" required tabindex="10">
					</label>
				</p>
				<p> *Mensagem: 
					<label>
						<textarea name="msgm" rows="4" cols="25" tabindex="5" required="required" tabindex="13">  </textarea> 
					</label>
				</p>
			</fieldset>
			<input type="submit" class="btn" name="enviar" tabindex="14">
		</form>
	</div>
</main>