<?php

class Bairro_model extends CI_Model {

    public function getAll() {
        //Busca os dados da tabela bairro no Banco de Dados
        $query = $this->db->get('tb_bairro');

        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_bairro', $data);
        return $this->db->affected_rows();
    }

    public function getOne($id) {
        $this->db->where('id_bairro', $id);
        //Busca a categoria respeitando o filtro
        $query = $this->db->get('tb_bairro');
        //retorna a primeira linha
        return $query->row(0);
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra o cliente que será alterado
            $this->db->where('id_bairro', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_bairro', $data);
            //retorno do numero de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_bairro', $id);
            $this->db->delete('tb_bairro');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
?>

