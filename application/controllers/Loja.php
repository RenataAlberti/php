<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Loja extends CI_Controller{
    	
         public function doPost(){
        	// Carregando o model produto.php
		    require_once APPPATH."models/produto.php";
		    $this->load->model('produtodao');
		    $m = $this->produtodao;
		    $cd_produto = $_POST["codProd"];
		    $nm_produto = $_POST["nomeProd"];
		    $ds_produto = $_POST["descProd"];
		    $qt_disponivel = $_POST["qtDisp"];
		    $ds_img = $_POST["imgProd"];
		    $ds_tema = $_POST["temaProd"];
		    $ds_cor = $_POST["corProd"];
		    $vl_unitario = $_POST["vlProd"];
		    $prod = new produto($cd_produto, $nm_produto, $ds_produto, $qt_disponivel, $ds_img, $ds_tema, $ds_cor, $vl_unitario);
		    $m->insert($prod);
		    $data['msg'] = true;
		    $this->load->view('header');
    	    $this->load->view('adm_Prod', $data);
    	    $this->load->view('footer');
		}
		
	    public function detalhes() {
	    	// Pega o 3º segmento da URI (controller/funcao/parametro)
	    	$pIdProduto = $this->uri->segment(3);
	    	// Carregando o model produtodao.php
            $this->load->model('produtodao');
            $model = $this->produtodao;
            // Buscando o codigo do produto para mapear a rota
            $query = $model->queryProduto($pIdProduto);
           	$data['produto'] = $query;
            $this->load->view('header');
            $this->load->view('detalhes', $data);
            $this->load->view('footer');
	    }
	
    }