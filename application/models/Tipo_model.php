<?php

class Tipo_model extends CI_model {

    public function getAll() {
        //Busca os dados da tabela tipo no Banco de Dados
        $query = $this->db->get('tb_tipo');

        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_tipo', $data);
        return $this->db->affected_rows();
    }

    //Método que recebe um id por parâmetro e busca ele no banco de Dados.
    public function getOne($id) {
        $this->db->where('id_tipo', $id);
        //Busca o detalhe respeitando o filtro
        $query = $this->db->get('tb_tipo');
        //retorna a primeira linha
        return $query->row(0);
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra o cliente que será alterado
            $this->db->where('id_tipo', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_tipo', $data);
            //retorno do numero de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            $this->db->where('id_tipo', $id);
            $this->db->delete('tb_tipo');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
?>

