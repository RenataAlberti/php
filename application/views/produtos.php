<main>
	<div id="ctt">
	<h1> Produtos </h1>
	</div>
	<div class="links">
		<?php
		    foreach($lista as $l){
		    	echo "<section class='circulo'>";
		    	echo "<h1>".$l->nm_produto."</h1>";
		    	echo "<a href='' title=''><img src='".$l->ds_img."' alt='".$l->nm_produto."'></a>";
		    	echo "<h3> Código: ".$l->cd_produto."</h3>";
		    	echo "<p>".$l->ds_produto."</p>";
		    	echo "<a href='".base_url()."loja/detalhes/".$l->cd_produto."' class='link' title='mais informacoes'> + Informações </a>";
		    	echo "<p>Estoque:".$l->qt_disponivel."</p>";
		        echo "<p>R$ ".$l->vl_unitario."</p>";
		    	echo "<button onclick='encomendar(this)'> Encomendar </button>";
		        echo "</section>";
		        
		    }
	    ?>
	</div>
</main>