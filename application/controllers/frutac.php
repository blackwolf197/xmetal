<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class frutac extends CI_Controller {
	public function __construct(){
		parent:: __construct();

		$this->load->model('frutam');
	}

	
	public function index(){
		$datos["fruta"] = $this->frutam->get_fruta();
		$datos["color"] = $this->frutam->get_color();
		$datos["sabor"] = $this->frutam->get_sabor();
        $data = array('title'=>'Fruta || PHP');

        $this->load->view('template/header',$data); 
		$this->load->view('frutav',$datos);
		$this->load->view('template/footer');
	}

    
    public function ingresar(){
     $datos["nombr"] = $_POST["nombre"];
     $datos["cantidad"] = $_POST["cantida"];
     $datos["color"] = $_POST["tcolor"];
     $datos["sabor"] = $_POST["tsabor"];
     $this->frutam->set_fruta($datos);
     redirect('/frutac/index/','refresh');
  
    }
    
    public function eliminar($id){
     $this->frutam->eliminar($id);
     redirect('/frutac/index/','refresh');	
        
    }
    


    public function get_dbofrutas($id){
    $datos["frutas"] = $this->frutam->get_dbfrutas($id);
    $datos["color"] = $this->frutam->get_color();
	$datos["sabor"] = $this->frutam->get_sabor();

	$this->load->view('frutavact',$datos);    	
           
    }
    
    public function actualizar(){
     $datos["id"] = $_POST["ID"]; 	
     $datos["nombr"] = $_POST["nombre"];
     $datos["cantidad"] = $_POST["cantida"];
     $datos["color"] = $_POST["tcolor"];
     $datos["sabor"] = $_POST["tsabor"];
     $this->frutam->set_update($datos);
      redirect('/frutac/index/','refresh'); 
    }



     
 
}
