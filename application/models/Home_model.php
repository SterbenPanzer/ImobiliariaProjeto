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

    public function getBusca($data = array()) {
        $this->db->select('tb_imovel.*,tx_titulo as titulo,tb_tipo.tx_descricao as tipo,tb_status.tx_descricao as status,tb_categoria.tx_descricao as categoria,tb_bairro.tx_descricao as bairro, (SELECT  SUM(tb_imoveltipodetalhes.nm_valor) FROM tb_imoveltipodetalhes WHERE tb_imoveltipodetalhes.cd_imovel = tb_imovel.id_imovel) AS quartos');
        $this->db->join('tb_tipo', 'tb_tipo.id_tipo = tb_imovel.cd_tipo', 'inner');
        $this->db->join('tb_status', 'tb_status.id_status = tb_imovel.cd_status', 'inner');
        $this->db->join('tb_categoria', 'tb_categoria.id_categoria = tb_imovel.cd_categoria', 'inner');
        $this->db->join('tb_bairro', 'tb_bairro.id_bairro = tb_imovel.cd_bairro', 'inner');

        $this->db->where('id_categoria', $data['cat']);
        $this->db->where('id_tipo', $data['tipo']);
        $this->db->where('id_bairro', $data['bairro']);
        $this->db->where('(SELECT SUM(tb_imoveltipodetalhes.nm_valor ) FROM tb_imoveltipodetalhes WHERE tb_imoveltipodetalhes.cd_imovel = tb_imovel.id_imovel) = ', $data['quartos']);
        $this->db->where(' tb_imovel.vl_valor BETWEEN '.$data['min'].' and '.$data['max']);
        
        $query = $this->db->get('tb_imovel');
        
        return $query->result();
    }

}
?>

