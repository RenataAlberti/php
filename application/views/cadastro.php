<main>
<script src="<?php echo base_url();?>static/js/jquery.js"></script>
<script src="<?php echo base_url();?>static/js/jquery.mask.min.js"> </script>
<script>
	$(document).ready(function(){
		$('#cpf').mask("999.999.999-99");
		$('#tel').mask("(99)9999-99999");
		$('#cel').mask("(99)9.9999-9999");
	});
</script>
	<div id="ctt">
		<?php if($msg){ ?>	
		 	<h2> Bem vindo :) </h2>
		 	<p> Pronto, você já está cadastrado no site. Aproveite, faça <a href="<?php echo base_url();?>menu/entrar" title="entrar">login</a>.</p>
	    <?php }else{ ?>
			<h1> Cadastro </h1>
			<p> * Campos obrigatórios
			<form action="<?php echo base_url();?>user/cadastrar" id="cad" method="POST">
				<fieldset class="cadastro">
					<legend> Informações pessoais </legend>
					<p> *Nome:
						<label>
							<input type="text" name="nome" required autofocus tabindex="9">
						</label>
					</p>
					<p>*CPF:
						<label>
							<input type="text" name="cpf" id="cpf" maxlength="14" tabindex="10">
						</label>
					</p>
				<fieldset class="inl">
					<p> *Nascimento: </p>
					<p>
						<label for="dia">
							<select name="dia" id="dia" required  tabindex="11">
								<option disabled="disabled" value="" selected> Dia </option>
								<?php 
									for($i = 0; $i <=31; $i++) { 
									echo "<option value='$i' $valor>$i</option>"; 
									} 
								?> 
							</select>
								</select>
							</label>
					</p>
					<p>
						<label for="mes">
							<select name="mes" id="mes" required  tabindex="12">
								<option disabled="disabled" value="" selected> Mês </option>
								<option value="1"> Janeiro </option>
								<option value="2"> Fevereiro </option>
								<option value="3"> Março </option>
								<option value="4"> Abril </option>
								<option value="5"> Maio </option>
								<option value="6"> Junho </option>
								<option value="7"> Julho </option>
								<option value="8"> Agosto </option>
								<option value="9"> Setembro </option>
								<option value="10"> Outubro </option>
								<option value="11"> Novembro </option>
								<option value="12"> Dezembro </option>
								</select>
							</label>
					</p>
					<p>/
						<label for="ano">
							<select name="ano" id="ano" required  tabindex="13"> 
							   <option disabled="disabled" value="" selected> Ano </option>
								<?php 
									for($i = 1915; $i <= date("Y"); $i++) { 
									echo "<option value='$i' $valor>$i</option>"; 
									} 
								?> 
							</select>
						</label>
					</p>
				</fieldset>
				<fieldset class="inl">
					<p>
						*Sexo: 
					</p>
					<p> 
						<label> 
							<input type="radio" name="sexo" value="f" required tabindex="14">
						</label>
						Feminino
					</p>
					<p> 
						<label>
							<input type="radio" name="sexo" value="m" required  tabindex="15">
						</label>
						Masculino 
					</p>
				</fieldset>
					<p> *Telefone:
						<label>
							<input type="text" maxlength="14" id="tel" required name="tel" tabindex="16">
						</label>
					</p>
					<p> Celular:
						<label>
							<input type="text" maxlength="14" id="cel" name="cel" tabindex="17">
						</label>
					</p>
				</fieldset>
				<fieldset class="cadastro">
					<legend> Informações de acesso</legend>
					<p> *E-mail:
						<label>
							<input type="email" name="email" id="email" required tabindex="18">
						</label>
					</p>
					<p> *Senha:
						<label>
							<input type="password" name="senha" id="senha" required tabindex="20">
						</label>
					</p>
				</fieldset>
				<fieldset class="pergunta">
					<legend> Deseja adicionar o endereço para entrega?  </legend>
					<p class="cc"> 
						<label> 
							<input type="radio" name="inf" required  value="sim" tabindex="22">
						</label>
						Sim
					</p>
					<p class="cc"> 
						<label>
							<input type="radio" name="inf" required  value="nao" tabindex="23">
						</label>
						Não
					</p>
				</fieldset>
				<script>
					$('.pergunta input').on('change', function(){
						var sn = $('input[name="inf"]:checked').val();
						if(sn === 'sim'){
							$("#entrega").show("slow");
						}else{
							$("#entrega").hide("slow");
						}
					});
				</script>
				<fieldset class="cadastro some" id="entrega">
					<legend> Informações de entrega </legend>
					(Entregas somente no Brasil)
					<p> *CEP:
						<label>
							<input type="text" name="cep" tabindex="24">
						</label>
					</p>
					<p> *Endereço:
						<label>
							<input type="text" name="end" tabindex="25">
						</label>
					</p>
					<p> *Número:
						<label>
							<input type="number" name="num" tabindex="25">
						</label>
					</p>
					<p> *Complemento:
						<label>
							<input type="text" name="comp" tabindex="26">
						</label>
					</p>
					<p> *Bairro:
						<label>
							<input type="text" name="bairro" tabindex="27"> 
						</label>
					</p>
					<p> *Cidade:
						<label>
							<input type="text" name="cidade" tabindex="28">
						</label>
					</p>
					<p>
						<label for="estado">*Estado:
							<select name="estado" id="estado" tabindex="29">
								<option value="AC"> Acre </option>
								<option value="AL"> Alagoas </option>
								<option value="AP"> Amapá </option>
								<option value="AM"> Amazonas </option>
								<option value="BA"> Bahia </option>
								<option value="CE"> Ceará </option>
								<option value="DF"> Distrito Federal </option>
								<option value="ES"> Espírito Santo </option>
								<option value="GO"> Goiás </option>
								<option value="MA"> Maranhão </option>
								<option value="MT"> Mato Grosso</option>
								<option value="MS"> Mato Grosso do Sul</option>
								<option value="MG"> Minas Gerais </option>
								<option value="PA"> Pará </option>
								<option value="PB"> Paraíba </option>
								<option value="PR"> Paraná</option>
								<option value="PE"> Pernambuco </option>
								<option value="PI"> Piauí </option>
								<option value="RJ"> Rio de Janeiro</option>
								<option value="RN"> Rio Grande do Norte </option>
								<option value="RS"> Rio Grande do Sul </option>
								<option value="RO"> Rondônia</option>
								<option value="RR"> Roraima</option>
								<option value="SC"> Santa Catarina </option>
								<option value="SP"> São Paulo</option>
								<option value="SE"> Sergipe</option>
								<option value="TO"> Tocantins </option>
							</select> 
						</label>
					</p>
					<p> Referência: 
						<label>
							<textarea name="ref" rows="4" cols="30" tabindex="30"></textarea>
						</label>
					</p>
				</fieldset>
				<input type="submit" class="btn" name="enviar" tabindex="31">
			</form>
		<?php } ?>
	</div>
</main>