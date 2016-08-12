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

    public function index($indice=null) {
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('includes/sidibar');
        if($indice==1){
            $data['msg'] = "Usuário cadastrado com sucesso.";
            $this->load->view('includes/mensagem_success',$data);
        }else if($indice==2){
            $data['msg'] = "Erro ao cadastrar.";
            $this->load->view('includes/mensagem_danger',$data);
        }        
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
            "status" => $this->input->post("status"),
        );
        
        $this->load->model('usuario_model');
        $this->usuario_model->salvar_usuario($usuario);
        redirect("usuario/1");
        
    }

}
