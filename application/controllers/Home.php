<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

class Home extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Categoria_model');
        $this->load->model('Imovel_model');
        $this->load->model('Faleconosco_model');
    }

    public function index() {
        //Chama a função listar antes de tudo.
        $this->listar();
    }

    public function listar() {

        $data['categorias'] = $this->Home_model->getCategoria();
        $data['tipos'] = $this->Home_model->getTipo();
        $data['bairros'] = $this->Home_model->getBairro();
        $data['contatos'] = $this->Faleconosco_model->getAll();
        $data['imoveis'] = $this->Imovel_model->getAll();
        $data['galerias'] = $this->Imovel_model->getImagem();
        $data['tipodetalhes'] = $this->Imovel_model->getDetalhesImovel2();

        $this->load->view('HeaderUser');
        $this->load->view('HomeUser',$data);
        $this->load->view('FooterUser');
    }

    
}

?>