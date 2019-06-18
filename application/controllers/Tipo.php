<?php

class Tipo extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Imovel_model');
        $this->load->model('Tipo_model');
    }

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['tipos'] = $this->Tipo_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaTipo', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormTipo');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_descricao' => $this->input->post('descricao')
            );

            if ($this->Tipo_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Tipo cadastrado com sucesso!!!');
                redirect('Tipo/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar tipo!!!');
                redirect('Tipo/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('descricao', 'descricao', 'required');

            if ($this->form_validation->run() == false) {

                $data['tipos'] = $this->Tipo_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormTipo', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_descricao' => $this->input->post('descricao')
                );

                if ($this->Tipo_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Tipo alterado com sucesso!!!');
                    redirect('Tipo/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar tipo...');
                    redirect('tipo/alterar/' . $id);
                }
            }
        } else {
            redirect('Tipo/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Tipo_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Tipo deletado com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar tipo...');
            }
        }
        redirect('Tipo/listar');
    }

}
?>

