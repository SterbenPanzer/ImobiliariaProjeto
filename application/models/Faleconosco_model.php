<?php

class Faleconosco_model extends CI_Model {
    
    public function getAll() {
        //Busca os dados da tabela faleconosco no Banco de Dados
        $query = $this->db->get('tb_faleconosco');

        return $query->row(0);
    }

    public function insert($data = array()) {
        $this->db->insert('tb_faleconosco', $data);
        return $this->db->affected_rows();
    }

    //Método que recebe um id por parâmetro e busca ele no banco de Dados.
    public function getOne($id) {
        $this->db->where('id_faleconosco', $id);
        //Busca a categoria respeitando o filtro
        $query = $this->db->get('tb_faleconosco');
        //retorna a primeira linha
        return $query->row(0);
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            $this->db->where('id_faleconosco', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_faleconosco', $data);
            //retorno do numero de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_faleconosco', $id);
            $this->db->delete('tb_faleconosco');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}

?>