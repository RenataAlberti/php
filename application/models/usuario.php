<?php
   class usuario{
        public 
        $nm_usuario, $cd_CPF, $dt_nascimento, $sg_sexo,
        $cd_telefone, $cd_celular, $ds_email, $ds_senha, $cd_CEP, 
        $nm_endereco, $cd_numEndereco,$ds_complemento, $nm_bairro,
        $nm_cidade, $sg_estado, $ds_referencia;
        
        public function __construct(
        $nm_usuario, $cd_CPF, $dt_nascimento, $sg_sexo,
        $cd_telefone, $cd_celular, $ds_email, $ds_senha, $cd_CEP, 
        $nm_endereco, $cd_numEndereco,$ds_complemento, $nm_bairro,
        $nm_cidade, $sg_estado, $ds_referencia){
            $this->nm_usuario = $nm_usuario;
            $this->cd_CPF = $cd_CPF;
            $this->dt_nascimento = $dt_nascimento;
            $this->sg_sexo = $sg_sexo;
            $this->cd_telefone = $cd_telefone;
            $this->cd_celular = $cd_celular;
            $this->ds_email = $ds_email;
            $this->ds_senha = $ds_senha;
            $this->cd_CEP = $cd_CEP;
            $this->nm_endereco = $nm_endereco;
            $this->cd_numEndereco = $cd_numEndereco;
            $this->ds_complemento = $ds_complemento;
            $this->nm_bairro = $nm_bairro;
            $this->nm_cidade = $nm_cidade;
            $this->sg_estado = $sg_estado;
            $this->ds_referencia = $ds_referencia;
        }
    }
?>