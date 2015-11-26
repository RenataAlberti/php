<?php

// CI_Model eh do codeIgnitor
class Produtodao extends CI_Model{
    public function insert(produto $prod){
        $this->db->insert('produto', $prod);
    }
    
    public function queryAll(){
	      $res = $this->db->query("Select * from produto");
        return $res->result();
	  }
	  
	  public function queryProduto($pIdProduto) {
	      $res = $this->db->query(
	          "Select * from produto where cd_produto = ?",
	          array($pIdProduto)
        );
        return $res->result();
	  }
	  
}
?>
   