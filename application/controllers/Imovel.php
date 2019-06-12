<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

//Toda classe do controller tem que herdar o CI_controller.
class Imovel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->Admin_model->verificaLogin();
        $this->load->model('Imovel_model');
        $this->load->model('Tipo_model');
        $this->load->model('Status_model');
        $this->load->model('Categoria_model');
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
        //Regras de validação.
        $this->form_validation->set_rules('titulo', 'titulo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('valor', 'valor', 'required');
        $this->form_validation->set_rules('id_tipo', 'id_tipo', 'required');
        $this->form_validation->set_rules('id_status', 'id_status', 'required');
        $this->form_validation->set_rules('id_categoria', 'id_categoria', 'required');

        //verifica se os dados foram atendidos corretamente.
        if ($this->form_validation->run() == false) {
            $data['tipos'] = $this->Imovel_model->getTipo();
            $data['status'] = $this->Imovel_model->getStatus();
            $data['categorias'] = $this->Imovel_model->getCategoria();
            //Se não tiver passado na validação,então o formulario sera carregado.
            $this->load->view('Header');
            $this->load->view('FormImovel', $data);
            $this->load->view('Footer');
        } else {
            //Carrega o model.
            //Resgata os dados por post.
            $data = array(
                'tx_titulo' => $this->input->post('titulo'),
                'tx_descricao' => $this->input->post('descricao'),
                'vl_valor' => $this->input->post('valor'),
                'cd_tipo' => $this->input->post('id_tipo'),
                'cd_status' => $this->input->post('id_status'),
                'cd_categoria' => $this->input->post('id_categoria')
            );
            //Chama o método insert do Model passando os dados a inserir, e já valida se teve linhas afetadas.
            if ($this->Imovel_model->insert($data)) {
                //Salva uma mensagem rapida na sessão.
                $this->session->set_flashdata('mensagem', 'Imovel cadastrado com sucesso!!!');
                redirect('Imovel/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar imovel!!!');
                redirect('Imovel/cadastrar');
            }
        }
    }

    public function alterar($id) {
        if ($id > 0) {

            //cria as regras de validação do formulário.
            $this->form_validation->set_rules('titulo', 'titulo', 'required');
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('valor', 'valor', 'required');
            $this->form_validation->set_rules('id_tipo', 'id_tipo', 'required');
            $this->form_validation->set_rules('id_status', 'id_status', 'required');
            $this->form_validation->set_rules('id_categoria', 'id_categoria', 'required');
            //valida se o formulario ja foi preenchida
            if ($this->form_validation->run() == false) {


                $data['tipos'] = $this->Imovel_model->getTipo();
                $data['status'] = $this->Imovel_model->getStatus();
                $data['categorias'] = $this->Imovel_model->getCategoria();
                //Monta a variavel data para mandar dados para a view e chama o metodo getOne da pontuacao model
                //para resgatar os dados da pontuação a ser alterado.
                $data['imoveis'] = $this->Imovel_model->getOne($id);

                $this->load->view('Header');
                $this->load->view('FormImovel', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'tx_titulo' => $this->input->post('titulo'),
                    'tx_descricao' => $this->input->post('descricao'),
                    'vl_valor' => $this->input->post('valor'),
                    'cd_tipo' => $this->input->post('id_tipo'),
                    'cd_status' => $this->input->post('id_status'),
                    'cd_categoria' => $this->input->post('id_categoria')
                );

                //chama o método update da Pontuacao_model e já valida se teve linhas afetadas.
                if ($this->Imovel_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Imóvel alterado com sucesso!!!');
                    redirect('Imovel/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar imóvel...');
                    redirect('Imovel/alterar' . $id);
                }
            }
        } else {
            redirect('Imovel/listar');
        }
    }

    public function deletar($id) {
        If ($id > 0) {
            //Manda para o model deletar e já valida o retorno para ver se deu certo. 
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

