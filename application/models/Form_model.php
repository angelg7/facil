<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function guardarForm($forms){
    $this->db->insert('formulario',$forms);  
        
    }
    
    function listarForm(){
        $query = $this->db->get('formulario');
        return $query->result();
    }
    
    function cargarForm($id){
        $form = new stdClass();
        $form->id = "";
        $form->Nombre = "";
        $form->Descripcion = "";
        $form->Precio = "";
        
        $query = $this->db->where('id=',$id);
        $query = $this->db->get('formulario');
        
        $rs = $query->result();
        
        if(count($rs) > 0){
            $form = $rs[0];
        }
        return $form;
       
    }
        
}
