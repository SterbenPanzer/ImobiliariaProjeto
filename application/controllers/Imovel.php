<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

//Toda classe do controller tem que herdar o CI_controller.
class Imovel extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Imovel_model');
    }

    public function index() {
//Chama a função listar antes de tudo.
        $this->listar();
    }

    public function listar() {
//Chama a função getAll do Imovel_model.
        $data['imoveis'] = $this->Imovel_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaImovel', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('titulo', 'titulo', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('valor', 'valor', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormImovel');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_titulo' => $this->input->post('titulo'),
                'tx_status' => $this->input->post('status'),
                'tx_descricao' => $this->input->post('descricao'),
                'vl_valor' => $this->input->post('valor')
            );

            if ($this->Imovel_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Imóvel cadastrado com sucesso!!!');
                redirect('Imovel/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar imóvel!!!');
                redirect('Imovel/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            $this->form_validation->set_rules('titulo', 'titulo', 'required');
            $this->form_validation->set_rules('status', 'status', 'required');
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('valor', 'valor', 'required');

            if ($this->form_validation->run() == false) {

                $data['imoveis'] = $this->Imovel_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormImovel', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_titulo' => $this->input->post('titulo'),
                    'tx_status' => $this->input->post('status'),
                    'tx_descricao' => $this->input->post('descricao'),
                    'vl_valor' => $this->input->post('valor')
                );

                if ($this->Imovel_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Imóvel alterado com sucesso!!!');
                    redirect('Imovel/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar imóvel...');
                    redirect('Imovel/alterar/' . $id);
                }
            }
        } else {
            redirect('Imovel/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Imovel_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Imóvel deletado com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar imóvel...');
            }
        }
        redirect('Imovel/listar');
    }

}
?>

