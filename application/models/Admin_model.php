<?php

class Admin_model extends CI_Model {

    public function getAdmin($email, $senha) {
        $this->db->where('tx_email', $email);
        $this->db->where('nm_senha', sha1($senha . 'felipeSENAC'));
        //$this->db->where('nm_senha', $senha );
       
        $query = $this->db->get('tb_admin');
        return $query->row(0);
    }
    
      public function verificaLogin() {
        //Resgata na sessão o status logado e o id do usuario
        $logado = $this->session->userdata('logado');
        $idAdmin = $this->session->userdata('idAdmin');

        //Verifica se o status está sendo setado, ou não está true, ou não tem idAdministrador
        if ((!isset($logado)) || ($logado != true) || ($idAdmin <= 0)) {
            //Redireciona obrigando o login...
            redirect($this->config->base_url() . 'Admin/login');
        }
    }

}
?>

