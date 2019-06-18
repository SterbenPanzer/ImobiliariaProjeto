<?php

class Proximidade_Model extends CI_model {

    public function getAll() {
        //Busca os dados da tabela tipodetalhes no Banco de Dados
        $query = $this->db->get('tb_proximidade');

        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_proximidade', $data);
        return $this->db->affected_rows();
    }

    //Método que recebe um id por parâmetro e busca ele no banco de Dados.
    public function getOne($id) {
        $this->db->where('id_proximidade', $id);
        //Busca o detalhe respeitando o filtro
        $query = $this->db->get('tb_proximidade');
        //retorna a primeira linha
        return $query->row(0);
    }
    
      public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra o cliente que será alterado
            $this->db->where('id_proximidade', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_proximidade', $data);
            //retorno do numero de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_proximidade', $id);
            $this->db->delete('tb_proximidade');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}

?>

