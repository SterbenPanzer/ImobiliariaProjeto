<?php

class Status extends CI_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Imovel_model');
        $this->load->model('Status_model');
    }

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['status'] = $this->Status_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaStatus', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormStatus');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_descricao' => $this->input->post('descricao')
            );

            if ($this->Status_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Status cadastrado com sucesso!!!');
                redirect('Status/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar status!!!');
                redirect('Status/cadastrar');
            }
        }
    }
    
        public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('descricao', 'descricao', 'required');

            if ($this->form_validation->run() == false) {

                $data['status'] = $this->Status_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormStatus', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_descricao' => $this->input->post('descricao')
                );

                if ($this->Status_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Status alterado com sucesso!!!');
                    redirect('Status/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar status...');
                    redirect('Status/alterar/' . $id);
                }
            }
        } else {
            redirect('Status/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Status_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Status deletado com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar status...');
            }
        }
        redirect('Status/listar');
    }

}
?>

