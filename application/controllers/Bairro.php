<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

class Bairro extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Imovel_model');
        $this->load->model('Bairro_model');
    }

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['bairros'] = $this->Bairro_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaBairro', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormBairro');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_descricao' => $this->input->post('descricao')
            );

            if ($this->Bairro_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Bairro cadastrado com sucesso!!!');
                redirect('Bairro/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar bairro!!!');
                redirect('Bairro/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('descricao', 'descricao', 'required');

            if ($this->form_validation->run() == false) {

                $data['bairros'] = $this->Bairro_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormBairro', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_descricao' => $this->input->post('descricao')
                );

                if ($this->Bairro_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Bairro alterado com sucesso!!!');
                    redirect('Bairro/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar bairro...');
                    redirect('Bairro/alterar/' . $id);
                }
            }
        } else {
            redirect('Bairro/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Bairro_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Bairro deletado com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar bairro...');
            }
        }
        redirect('Bairro/listar');
    }

}

?>
