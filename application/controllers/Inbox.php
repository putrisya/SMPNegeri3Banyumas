<?php 
 
class Inbox extends CI_Controller{

    function __construct()
    {
    	parent::__construct();
        $this->load->model('Inbox_model');
    }

    function index()
    {
        $data['tahun'] = $this->Inbox_model->gettahun();
        $this->load->view('admin/inbox/inbox', $data);
    }

}