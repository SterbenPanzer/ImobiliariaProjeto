<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('LoginAdmin');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('LoginAdmin');
        } else {
            $this->load->model('Admin_model');

            $admin = $this->Admin_model->getAdmin(
                    $this->input->post('email'), $this->input->post('senha')
            );

            if ($admin) {
                $data = array(
                    'idAdmin' => $admin->id_admin,
                    'email' => $admin->tx_email,
                    'logado' => TRUE
                );
                $this->session->set_userdata($data);

                redirect($this->config->base_url('index.php'));
            } else {
                $this->session->set_flashdata('mensagem', 'Usuário e Senha incorretos!!!');

                redirect($this->config->base_url() . 'Admin/LoginAdmin');
            }
        }
    }

    public function sair() {
        $this->session->sess_destroy();
        redirect($this->config->base_url('index.php'));
    }

}
?>

