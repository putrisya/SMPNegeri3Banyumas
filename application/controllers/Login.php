<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login'); 
	}
	function index(){
		if($this->session->has_userdata('username')) {
			redirect('admin');
		}
		$this->load->view('login');
	}
	function gagal_login(){
		$this->load->view('gagal_login');
	}
	function aksi_login(){
		$this->load->library('session');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		$id = $this->db->query("SELECT * FROM admin WHERE admin.`username` = '$username' ")->result_array();
		if($cek > 0){
			$data_session = array(
				'id' => $id[0]['id'],
				'status' => 'login',
				);
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/admin"));
		}
		else{
		
			redirect(base_url("login/gagal_login"));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}