<?php

// CI_Model eh do codeIgnitor
class Model extends CI_Model{
   
    // $usu vem do controller
    public function insert(logar $usu){
        // logar eh o nome da tabela
        $this->db->insert('logar', $usu);
    }
    
    // Definindo permissão
    // Metodo para pegar e verificar se ha o usuario no banco
    public function getUser($ds_email, $ds_senha, $banco){
        // Select * from logar ou usuario
        //      where ds_email = '$ds_email' and ds_senha = '$ds_senha'
        $this->db->where('ds_email',$ds_email);
		$this->db->where('ds_senha',$ds_senha);
		$a = $this->db->get($banco);
		// Verificando se o numero de linha de registro e maior que 0
		if ($a->num_rows()>0){
			if($a->row()->ds_email === "garcia@prof.com"){
				return "admin";
			}
			if ($a->row()->ds_email === "renata@alberti.com"){
			    return "admin";
			}
			else{
				return "usuario";
			}
		}else{
			return false;
		}
    }
    
    
    public function searchAll(){
	    $query = $this->db->query("Select * from logar");
        return $query->result();
	}
}
?>