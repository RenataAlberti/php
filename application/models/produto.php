<?php
    class produto{
        public $cd_produto, $nm_produto, $ds_produto, $qt_disponivel, $ds_img, $ds_tema, $ds_cor, $vl_unitario;
        
        public function __construct($cd_produto, $nm_produto, $ds_produto, $qt_disponivel, $ds_img, $ds_tema, $ds_cor, $vl_unitario){
            $this->cd_produto = $cd_produto;
            $this->nm_produto = $nm_produto;
            $this->ds_produto = $ds_produto;
            $this->qt_disponivel = $qt_disponivel;
            $this->ds_img = $ds_img;
            $this->ds_tema = $ds_tema;
            $this->ds_cor = $ds_cor;
            $this->vl_unitario = $vl_unitario;
        }
    }
?>