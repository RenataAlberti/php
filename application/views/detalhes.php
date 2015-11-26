<main>
	<div id="ctt">
	<h1> Detalhes do produto </h1>
	</div>

			<?php
			    foreach($produto as $p){
			    	echo "<section class='detalhe'>
				    		  <h2>".$p->nm_produto." - Cód: ".$p->cd_produto."</h2>
				    		  <img src='".$p->ds_img."' class='size' alt='".$p->nm_produto."'>
			    		  </section>
			    		  <section class='info'>
				    		  <dl>
					    		  <dt> Descrição </dt>
					    				<dd>".$p->ds_produto."</dd>
					    		  <dt> Tema </dt>
					    				<dd>".$p->ds_tema."</dd>
					    		  <dt> Estoque </dt>
					    				<dd>".$p->qt_disponivel."</dd>
					    		  <dt> Valor </dt>
					    				<dd> R$ ".$p->vl_unitario."</dd>
				    		  </dl>
				    		  <button class='detalhebtn' onclick='encomendar(this)'> Encomendar </button>
			    		  </section>";
			    }
		    ?>

</main>