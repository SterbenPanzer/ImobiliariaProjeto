<?php

class Home_model extends CI_Model {

    
    public function getCategoria() {
        //Pega  a tabela categoria no Banco de Dados.
        $query = $this->db->get('tb_categoria');
        //Retorna em formato de array
        return $query->result();
    }

}
?>

