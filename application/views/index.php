<main>
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="<?php echo base_url();?>static/img/slide/01.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url();?>static/img/slide/02.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url();?>static/img/slide/03.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url();?>static/img/slide/04.jpg" />
  	    		</li>
          </ul>
		</div>
    </section>

	<div class="links">
		<h2 id="colecoes"> PRODUTOS </h2>
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
	  <!-- jQuery -->
 <script src="<?php echo base_url();?>static/js/jquery.js"></script>
 <!-- <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>-->

  <!-- FlexSlider -->
  <script defer src="<?php echo base_url();?>static/js/jquery.flexslider.js"></script>

  <script defer src="<?php echo base_url();?>static/js/slide.js"></script>
</main>
