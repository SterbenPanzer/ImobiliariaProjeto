<?php

class Detalhe extends CI_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Imovel_model');
        $this->load->model('Detalhe_model');
    }

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['detalhes'] = $this->Detalhe_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaDetalhe', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormDetalhe');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_descricao' => $this->input->post('descricao')
            );

            if ($this->Detalhe_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Detalhe cadastrado com sucesso!!!');
                redirect('Detalhe/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar detalhe!!!');
                redirect('Detalhe/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('descricao', 'descricao', 'required');

            if ($this->form_validation->run() == false) {

                $data['detalhes'] = $this->Detalhe_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormDetalhe', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_descricao' => $this->input->post('descricao')
                );

                if ($this->Detalhe_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Detalhe alterado com sucesso!!!');
                    redirect('Detalhe/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar detalhe...');
                    redirect('Detalhe/alterar/' . $id);
                }
            }
        } else {
            redirect('Detalhe/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Detalhe_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Detalhe deletado com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar detalhe...');
            }
        }
        redirect('Detalhe/listar');
    }

}

?>
