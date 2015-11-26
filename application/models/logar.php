<?php
    class logar{
        public $ds_email, $ds_senha;
        
        public function __construct($ds_email, $ds_senha){
            $this->ds_email = $ds_email;
            $this->ds_senha = $ds_senha;
        }
    }
?>