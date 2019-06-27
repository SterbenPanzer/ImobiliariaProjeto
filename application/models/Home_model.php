<?php

class Home_model extends CI_Model {

    
    public function getCategoria() {
        //Pega  a tabela categoria no Banco de Dados.
        $query = $this->db->get('tb_categoria');
        //Retorna em formato de array
        return $query->result();
    }
    
    public function getTipo() {
        
        $query = $this->db->get('tb_tipo');
        
        return $query->result();
    }
    
    public function getContato() {
        
        $query = $this->db->get('tb_tipo');
        
        return $query->result();
    }
    public function getBairro() {
        
        $query = $this->db->get('tb_bairro');
        
        return $query->result();
    }

}
?>

