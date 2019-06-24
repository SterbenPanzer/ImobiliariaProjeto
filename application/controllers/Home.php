<?php

defined('BASEPATH') OR exit('No direct script acces allowed');

class Home extends CI_Controller {

    public function index() {
        //Chama a função listar antes de tudo.
                $this->listar();
            }

            public function listar() {
                //Chama a função getAll do Imovel_model.
                
                        $this->load->view('HeaderUser');
                        $this->load->view('HomeUser');
                        $this->load->view('FooterUser');
                    }           
}

?>