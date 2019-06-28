<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Contato extends CI_Controller {
    
            public function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Faleconosco_model');
    }
    
      public function index() {
        //Chama a função listar antes de tudo.
        $this->listar();
    }
    
       public function listar() {

        $data['contatos'] = $this->Faleconosco_model->getAll();

        $this->load->view('HeaderUser');
        $this->load->view('ContatoUser',$data);
        $this->load->view('FooterUser');
    }
}
?>
