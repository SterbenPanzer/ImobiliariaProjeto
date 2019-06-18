<?php

class Categoria extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Imovel_model');
        $this->load->model('Categoria_model');
    }

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['categorias'] = $this->Categoria_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaCategoria', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormCategoria');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_descricao' => $this->input->post('descricao')
            );

            if ($this->Categoria_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Categoria cadastrada com sucesso!!!');
                redirect('Categoria/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar categoria!!!');
                redirect('Categoria/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('descricao', 'descricao', 'required');

            if ($this->form_validation->run() == false) {

                $data['categorias'] = $this->Categoria_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormCategoria', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_descricao' => $this->input->post('descricao')
                );

                if ($this->Categoria_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Categoria alterada com sucesso!!!');
                    redirect('Categoria/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar categoria...');
                    redirect('Categoria/alterar/' . $id);
                }
            }
        } else {
            redirect('Categoria/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Categoria_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Categoria deletada com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar categoria...');
            }
        }
        redirect('Categoria/listar');
    }

}
?>

