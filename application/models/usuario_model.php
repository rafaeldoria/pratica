<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario_model
 *
 * @author PC Niiel
 */
class usuario_model extends CI_Model{
    public function salvar_usuario($usuario){
        $this->db->insert("usuario", $usuario);
    }
}
