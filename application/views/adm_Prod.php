<main>
	<div id="ctt">
		<?php if($msg){ ?>
	       	<h2>Produto cadastrado com sucesso!</h2>
	       	<a href="<?php echo base_url();?>loja/cadastro" title="novo cadastro"> Cadastrar outro </a>
    	<?php }else{ ?>
	    	<h1> Cadastro de produtos </h1>
    		<p> * Campos obrigatórios
			<form action="<?php echo base_url();?>loja/doPost" id="cadProd" method="POST">
				<fieldset class="cadastro">
					<legend> Informações do produto </legend>
					<p> *Código:
						<input type="text" name="codProd" required autofocus tabindex="9">
					</p>
					<p> *Nome:
						<label>
							<input type="text" name="nomeProd" required tabindex="10">
						</label>
					</p>
					<p>*Descrição:
						<label>
							<input type="text" name="descProd" id="descProd" tabindex="11">
						</label>
					</p>
					<p> *Quantidade em estoque:
						<label>
							<input type="numb" maxlength="3" id="qtDisp" name="qtDisp" tabindex="12">
						</label>
					</p>
					<p> *Link da imagem:
						<label>
							<input type="text" id="imgProd" name="imgProd" tabindex="13">
						</label>
					</p>
					<p> *Tema:
						<label>
							<input type="text" id="temaProd" name="temaProd" tabindex="14">
						</label>
					</p>
					<p> *Cor:
						<label>
							<input type="text" id="corProd" name="corProd" tabindex="15">
						</label>
					</p>
					<p> *Valor:
						<label>
							<input type="text" id="vlProd" name="vlProd" tabindex="16">
						</label>
					</p>
				</fieldset>
				<input type="submit" class="btn" name="enviar" tabindex="17">
			</form>
		<?php } ?>
	</div>
</main>
?>