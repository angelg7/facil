<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('form_model');
        $this->load->database();
    }

	function index()
	{
        $data = array();
        
        $id = (isset($_GET['id']))?$_GET['id']+0:0;
        
        $data['form'] = $this->form_model->cargarForm($id);
        
        $data['forms'] = $this->form_model->listarForm();
        
        
		$this->load->view('form/intro',$data);
	}
    
    function guardar(){
        if($_POST){
            $this->form_model->guardarForm($_POST);
        }
        $this->load->view('form/mensaje');
        
    }
        
}
