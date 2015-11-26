<?php

// CI_Model eh do codeIgnitor
class Usuariodao extends CI_Model{
   
   // Inserindo o cadastro do usuário no banco
   // newCadastro vem do controller
    public function insert(usuario $newCadastro){
        $this->db->insert('usuario',$newCadastro);
    }
}

?>