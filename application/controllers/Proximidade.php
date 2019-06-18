<?php

class Proximidade extends CI_controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Imovel_model');
        $this->load->model('Proximidade_model');
    }

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['proximidades'] = $this->Proximidade_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaProximidade', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('descricao', 'descricao', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormProximidade');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_descricao' => $this->input->post('descricao')
            );

            if ($this->Proximidade_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Proximidade cadastrada com sucesso!!!');
                redirect('Proximidade/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar proximidade!!!');
                redirect('Proximidade/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('descricao', 'descricao', 'required');

            if ($this->form_validation->run() == false) {

                $data['proximidades'] = $this->Proximidade_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormProximidade', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_descricao' => $this->input->post('descricao')
                );

                if ($this->Proximidade_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Proximidade alterada com sucesso!!!');
                    redirect('Proximidade/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar proximidade...');
                    redirect('Proximidade/alterar/' . $id);
                }
            }
        } else {
            redirect('Proximidade/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Proximidade_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Proximidade deletada com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar proximidade...');
            }
        }
        redirect('Proximidade/listar');
    }

}

?>
