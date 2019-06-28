<?php
class Faleconosco extends CI_Controller {

    public function __construct() {
    parent::__construct();

        $this->load->model('Imovel_model');
        $this->load->model('Faleconosco_model');
    }

    public function index() {
        $this->listar();
    }

    public function listar() {
        $data['contatos'] = $this->Faleconosco_model->getAll();

        $this->load->view('Header');
        $this->load->view('ListaFaleconosco', $data);
        $this->load->view('Footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('empresa', 'empresa', 'required');
        $this->form_validation->set_rules('endereco', 'endereco', 'required');
        $this->form_validation->set_rules('telefone', 'telefone', 'required');
        $this->form_validation->set_rules('celular', 'celular', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Header');
            $this->load->view('FormFaleconosco');
            $this->load->view('Footer');
        } else {

            $data = array(
                'tx_nomeempresa' => $this->input->post('empresa'),
                'tx_endereco' => $this->input->post('endereco'),
                'nm_telefone' => $this->input->post('telefone'),
                'nm_celular' => $this->input->post('celular'),
                'tx_email' => $this->input->post('email')
            );

            if ($this->Faleconosco_model->insert($data)) {

                $this->session->set_flashdata('mensagem', 'Contato da empresa cadastrado com sucesso!!!');
                redirect('Faleconosco/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar contato da empresa!!!');
                redirect('Faleconosco/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {
            $this->form_validation->set_rules('empresa', 'empresa', 'required');
            $this->form_validation->set_rules('endereco', 'endereco', 'required');
            $this->form_validation->set_rules('telefone', 'telefone', 'required');
            $this->form_validation->set_rules('celular', 'celular', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');

            if ($this->form_validation->run() == false) {

                $data['contatos'] = $this->Faleconosco_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormFaleconosco', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_nomeempresa' => $this->input->post('empresa'),
                'tx_endereco' => $this->input->post('endereco'),
                'nm_telefone' => $this->input->post('telefone'),
                'nm_celular' => $this->input->post('celular'),
                'tx_email' => $this->input->post('email')
                );

                if ($this->Faleconosco_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Contato da empresa alterado com sucesso!!!');
                    redirect('Faleconosco/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar contato da empresa...');
                    redirect('Faleconosco/alterar/' . $id);
                }
            }
        } else {
            redirect('Faleconosco/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e ja valida o retorno para ver se deu certo 
            if ($this->Faleconosco_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Contato da empresa deletado com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar contato da empresa...');
            }
        }
        redirect('Faleconosco/listar');
    }

}
?>