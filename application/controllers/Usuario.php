<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Rafael Dória
 */
class Usuario extends CI_Controller {

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('includes/sidibar');
        $this->load->view('lista_usuarios');
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "cpf" => $this->input->post("cpf"),
            "endereco" => $this->input->post("endereco"),
            "nivel" => $this->input->post("nivel"),
            "email" => $this->input->post("email"),
            "senha" => $this->input->post("senha"),
            "status" => $this->input->post("staus"),
        );
    }

}
