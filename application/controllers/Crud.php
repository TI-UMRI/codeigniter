<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('m_crud');
  }

	public function index()
	{
    $rs_data['result']=$this->m_crud->get_data();
    $this->load->view('list',$rs_data);
  }
  
  public function add(){
    $this->load->view('form');
  }

  public function insert(){
    $nama=$this->input->post('nama');
    $no_hp=$this->input->post('no_hp');
    $email=$this->input->post('email');
    $alamat=$this->input->post('alamat');
    $params=array($nama, $no_hp, $email, $alamat);
    $this->m_crud->insert($params);
    return redirect('crud');
  }
}
