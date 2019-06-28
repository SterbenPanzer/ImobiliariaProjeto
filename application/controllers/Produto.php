<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

class Produto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Categoria_model');
        $this->load->model('Imovel_model');
        $this->load->model('Faleconosco_model');
        $this->load->model('Produto_model');
    }

    public function index() {
        //Chama a função listar antes de tudo.
        $this->listar();
    }

    public function listar($id) {

        $data['categorias'] = $this->Produto_model->getCategoria();
        $data['tipos'] = $this->Produto_model->getTipo();
        $data['bairros'] = $this->Produto_model->getBairro();
        $data['contatos'] = $this->Faleconosco_model->getAll();
        $data['imoveis'] = $this->Imovel_model->getOne($id);
        $data['galerias'] = $this->Imovel_model->getImagem();
        $data['tipodetalhes'] = $this->Imovel_model->getDetalhesImovel2();

        $this->load->view('HeaderUser');
        $this->load->view('ProdutoUser', $data);
        $this->load->view('FooterUser');
    }
}
?>

