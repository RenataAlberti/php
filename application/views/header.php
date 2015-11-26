<!DOCTYPEhtml>
<html>
<head>
<meta charset="utf-8">
<title> Início - Vânia Augusto </title>
	<link href="<?php echo base_url();?>static/css/estilo.css" rel="stylesheet">
	<!-- Slide -->
	<link rel="stylesheet" href="<?php echo base_url();?>static/css/flexslider.css" type="text/css" media="screen" />
	<script src="<?php echo base_url();?>static/js/modernizr.js"></script>
</head>
<body class="loading">
<header>
	<ul id="login">
		<?php if($this->session->userdata('_ID')){ ?>
			<li> Bem vindo Usuário :) </li>
			<li> <a href="<?php echo base_url();?>menu/sair" title="sair"> Sair </a></li>
		<?php }else if($this->session->userdata('_ADM')){ ?>
			<li> Bem vindo Admin :) </li>
			<li> <a href="<?php echo base_url();?>menu/sair" title="sair"> Sair </a></li>
		<?php } else {?>
			<li> <a href="<?php echo base_url();?>menu/cadastro" title="cadastrar"> Cadastre-se </a></li>
			<li> <a href="<?php echo base_url();?>menu/entrar" title="login"> Entrar </a></li>
		<?php } ?>
	</ul>
<img src="<?php echo base_url();?>static/img/logo.png" alt="logo">
</header>
<nav>
	<ul>
		<li> <a href="<?php echo base_url();?>menu/index" title="início"> INÍCIO </a></li>
		<li> <a href="<?php echo base_url();?>menu/produtos" title="produtos"> PRODUTOS </a></li>
		<li> <a href="<?php echo base_url();?>menu/contato" title="contato"> CONTATO </a></li>
		<?php if($this->session->userdata('_ADM')){ ?>
		<li> <a href="<?php echo base_url();?>restrito/admin" title="sair"> NOVO PRODUTO </a></li>
		<?php }else if($this->session->userdata('_ID')){ } else{ ?>
		<li> <a href="<?php echo base_url();?>menu/restrito" title="restrito"> RESTRITO </a></li>
		<?php } ?>
	</ul>
</nav>
<main>