<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class frutam extends CI_Model {

 public function get_fruta(){
 	$this->db->select('f.id_fruta,f.nombre_fruta,f.cantidad,c.nombre_color,s.nombre_sabor');
    $this->db->from('fruta f');
    $this->db->join('color c', 'f.id_color = c.id_color');
    $this->db->join('sabor s', 'f.id_sabor = s.id_sabor');
    $dbo = $this->db->get();
    return $dbo->result();      
 }	

 public function get_color(){
 	$dbo = $this->db->get('color');
    return $dbo->result(); 
 }
 
 public function get_sabor(){
 	$dbo = $this->db->get('sabor');
    return $dbo->result(); 
 } 


 public function set_fruta($datos){
 	$this->db->set('nombre_fruta',$datos["nombr"]);
 	$this->db->set('cantidad',$datos["cantidad"]);
 	$this->db->set('id_color',$datos["color"]);
 	$this->db->set('id_sabor',$datos["sabor"]);
 	$this->db->insert('fruta');

 }
  
  public function eliminar($id){
  	$this->db->where('id_fruta',$id);
  	$dbo = $this->db->delete('fruta ');
    return $dbo;

  }
  
  public function get_dbfrutas($id){
   $this->db->where('id_fruta',$id);
   $dbo = $this->db->get('fruta');
   return $dbo->result();   
  
  }
  
  public function set_update($datos){
  $this->db->set('nombre_fruta',$datos["nombr"]);
 	$this->db->set('cantidad',$datos["cantidad"]);
 	$this->db->set('id_color',$datos["color"]);
 	$this->db->set('id_sabor',$datos["sabor"]);
 	$this->db->where('id_fruta',$datos["id"]);
 	$this->db->update('fruta');
  
  }


}