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
        $this->load->view('HomeUser', $data);
        $this->load->view('FooterUser');
    }

    public function buscar() {
        $this->form_validation->set_rules('id_categoria', 'id_categoria', 'required');
        $this->form_validation->set_rules('id_tipo', 'id_tipo', 'required');
        $this->form_validation->set_rules('id_bairro', 'id_bairro', 'required');
        $this->form_validation->set_rules('quartos', 'quartos', 'required');
        $this->form_validation->set_rules('precoMinimo', 'precoMinimo', 'required');
        $this->form_validation->set_rules('precoMaximo', 'precoMaximo', 'required');

        if ($this->form_validation->run() == false) {
            $this->listar();
        } else {
            $data = array(
                'cat' => $this->input->post('id_categoria'),
                'tipo' => $this->input->post('id_tipo'),
                'bairro' => $this->input->post('id_bairro'),
                'quartos' => $this->input->post('quartos'),
                'min' => $this->input->post('precoMinimo'),
                'max' => $this->input->post('precoMaximo')
            );

            $data['categorias'] = $this->Home_model->getCategoria();
            $data['tipos'] = $this->Home_model->getTipo();
            $data['bairros'] = $this->Home_model->getBairro();
            $data['contatos'] = $this->Faleconosco_model->getAll();
            $data['galerias'] = $this->Imovel_model->getImagem();
            $data['tipodetalhes'] = $this->Imovel_model->getDetalhesImovel2();
            $data['imoveis'] = $this->Home_model->getBusca($data);
            $this->load->view('HeaderUser');
            $this->load->view('HomeUser', $data);
            $this->load->view('FooterUser');
        }
    }

}

?>