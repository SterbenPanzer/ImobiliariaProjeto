<?php

class Imovel_model extends CI_Model {

    public function getAll() {
        $this->db->select('tb_imovel.*,tx_titulo as titulo,tb_tipo.tx_descricao as tipo,tb_status.tx_descricao as status,tb_categoria.tx_descricao as categoria');
        $this->db->join('tb_tipo', 'tb_tipo.id_tipo = tb_imovel.cd_tipo', 'inner');
        $this->db->join('tb_status', 'tb_status.id_status = tb_imovel.cd_status', 'inner');
        $this->db->join('tb_categoria', 'tb_categoria.id_categoria = tb_imovel.cd_categoria', 'inner');
        //Busca os dados da tabela imovel no Banco de Dados
        $query = $this->db->get('tb_imovel');

        return $query->result();
    }

    public function insert($data = array()) {
        $this->db->insert('tb_imovel', $data);


        return $this->db->insert_id();
    }

    public function insertDetalhes($dataDetalhes = array()) {
        $this->db->insert('tb_imoveltipodetalhes', $dataDetalhes);

        return $this->db->affected_rows();
    }

    public function insertImagem($dataImagem = array()) {
        $this->db->insert('tb_galeria', $dataImagem);

        return $this->db->affected_rows();
    }

    //Método que recebe um id por parâmetro e busca ele no banco de Dados.
    public function getOne($id) {
        $this->db->select('tb_imovel.*,tx_titulo as titulo,tb_tipo.tx_descricao as tipo,tb_status.tx_descricao as status,tb_categoria.tx_descricao as categoria');
        $this->db->where('id_imovel', $id);
        $this->db->join('tb_tipo', 'tb_tipo.id_tipo = tb_imovel.cd_tipo', 'inner');
        $this->db->join('tb_status', 'tb_status.id_status = tb_imovel.cd_status', 'inner');
        $this->db->join('tb_categoria', 'tb_categoria.id_categoria = tb_imovel.cd_categoria', 'inner');

        $query = $this->db->get('tb_imovel');
        //retorna a primeira linha
        return $query->row(0);
    }

    public function getTipo() {
        //Pega  a tabela tipo no Banco de Dados.
        $query = $this->db->get('tb_tipo');
        //Retorna em formato de array
        return $query->result();
    }

    public function getDetalhesImovel($id) {
        $this->db->select('tb_imoveltipodetalhes.*,nm_valor as valor,tb_tipodetalhes.tx_descricao as descricao');        
        $this->db->join('tb_tipodetalhes', 'tb_tipodetalhes.id_tipodetalhes = tb_imoveltipodetalhes.cd_tipodetalhes', 'inner');
        $this->db->where('cd_imovel', $id);
        $query = $this->db->get('tb_imoveltipodetalhes');
        //retorna a primeira linha
        return $query->result();
    }

    public function getStatus() {

        //Pega  a tabela status no Banco de Dados.
        $query = $this->db->get('tb_status');
        //Retorna em formato de array
        return $query->result();
    }

    public function getCategoria() {
        //Pega  a tabela categoria no Banco de Dados.
        $query = $this->db->get('tb_categoria');
        //Retorna em formato de array
        return $query->result();
    }

    public function getDetalhes() {

        $query = $this->db->get('tb_tipodetalhes');

        return $query->result();
    }

    public function getDetalhesTipo() {

        $this->db->select('tb_imoveltipodetalhes.*,nm_valor as valor,tb_tipodetalhes.tx_descricao as descricao');
        $this->db->join('tb_tipodetalhes', 'tb_tipodetalhes.id_tipodetalhes = tb_imoveltipodetalhes.cd_tipodetalhes', 'inner');

        $query = $this->db->get('tb_imoveltipodetalhes');

        return $query->result();
    }

    public function getImagem() {
        $this->db->select('tb_galeria.*');
        $this->db->join('tb_imovel', 'tb_imovel.id_imovel=tb_galeria.cd_imovel', 'left');

        $query = $this->db->get('tb_galeria');

        return $query->result();
    }

    public function update($id, $data = array()) {
        if ($id > 0) {
            //filtra a pontuação que será alterada
            $this->db->where('id_imovel', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_imovel', $data);
            //retorno do numero de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    
       public function updateImagem($id, $dataImagem = array()) {
        if ($id > 0) {
            //filtra a pontuação que será alterada
            $this->db->where('id_galeria', $id);
            //altera os dados de acordo com o recebido por parametro
            $this->db->update('tb_galeria', $dataImagem);
            //retorno do numero de linhas afetadas
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($id > 0) {
            
            $this->db->where('cd_imovel', $id);
            $this->db->delete('tb_galeria');
            
            $this->db->where('cd_imovel', $id);
            $this->db->delete('tb_imoveltipodetalhes');

            $this->db->where('id_imovel', $id);
            $this->db->delete('tb_imovel');

            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    
      public function deleteImagem($id) {
        if ($id > 0) {
            
            $this->db->where('cd_imovel', $id);
            $this->db->delete('tb_galeria');
            
            
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

}
?>

