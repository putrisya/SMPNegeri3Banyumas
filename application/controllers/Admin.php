<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
		if(!($this->session->has_userdata('status'))){
			redirect(base_url("login"));
		}
		$this->load->model('admin_model');
		// $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		$this->load->helper('tanggal');
		
		
	}

	// ************************************************************************************
    //                                 dashboard
    // ************************************************************************************
 
	function index(){
		$id = $this->session->userdata('id');
		$row = $this->db->query("SELECT * FROM admin WHERE admin.`id` = '$id'")->result_array();
		$data = array(
			'id' => $row[0]['id'],
			'username' => $row[0]['username'],
		);
		// function inbox_i(){
		// 	$data = array('data_inboxi' => $this->admin_model->ambil_inbox()->result_array(),);
		// 	$this->load->view('admin/inbox/inbox', $data);
		// }
		$this->load->view('admin/dashboard', $data);
		}
		public function mychart()
		{
			$data = array('myChart' => $this->admin_model->myChart()->result_array(),);
			$this->load->view('admin_dashboard', $data);
		}

	// ************************************************************************************
    //                                 Dashboard admin
    // ************************************************************************************

	function admin(){
		$id = $this->session->userdata('id');
		$row = $this->db->query("SELECT * FROM admin WHERE admin.`id` = '$id'")->result_array();
		$data = array(
			'id' => $row[0]['id'],
			'username' => $row[0]['username'],
		);
		$this->load->view('admin/dashboard', $data);
	}

	// ************************************************************************************
    //                                 profile admin
    // ************************************************************************************

    function admin_profile(){
		$query =  $this->session->userdata('id');
		$data = array('data_admin' => $this->admin_model->editprofile("where admin.`id`  = '$query'")->result_array());
		$this->load->view('admin/myprofile/profile', $data);
	}
	
	function editprofile(){
		$query =  $this->session->userdata('id');
		$row = $this->admin_model->editprofile("where admin.`id`  = '$query'")->result_array();
		// $row = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data = array(
			'id' => $row[0]['id'],
			'username' => $row[0]['username'],
		);
		$this->load->view('admin/myprofile/editprofile', $data);
	}

	function editpassword(){
		$query =  $this->session->userdata('id');
		$row = $this->admin_model->editpassword("where admin.`id`  = '$query'")->result_array();
		// $row = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data = array(
			'id' => $row[0]['id'],
			'username' => $row[0]['username'],
		);
		$this->load->view('admin/myprofile/editpassword', $data);
	}

	function update_password(){

		$query =  $this->session->userdata('id');
		$row = $this->admin_model->editpassword("where admin.`id`  = '$query'")->result_array();
		// $row = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data2 = array(
			'id' => $row[0]['id'],
			'username' => $row[0]['username'],
		);

		$id = $this->session->userdata('id');
		$current_password = $this->input->post('current_password');
		$new_password = $this->input->post('new_password');
		$confirm_password = $this->input->post('konf_password');
		$password = md5($current_password);
		$password_baru = md5($new_password);
		$data['admin'] = $this->db->get_where('admin', ['id' => $this->session->userdata('id')])->row_array();
		$this->form_validation->set_rules('current_password','Current Password', 'required|trim');

		// if($this->form_validation->run() == false){
		// 	$newpass = array(
		// 		'id' => $id,
		// 		'username' => $this->input->post('username'),
		// 	);
		// 	$res = $this->admin_model->update_profile($newpass);
		// 	if($res=1){
		// 		header('location:'.base_url().'admin/editprofile');
		// 		$this->load->view('admin/myprofile/editprofile', $data2);
		// 		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
		// 	}
		// }
		if($new_password != $confirm_password){
				header('location:'.base_url().'admin/editpassword');
				$this->load->view('admin/myprofile/editpassword', $data2);
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password baru tidak sama dengan konfirmasi password!</div>');
		}
		else {
			
			if($password != $data['admin']['password']){
				if($res=1){
					header('location:'.base_url().'admin/editpassword');
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah!</div>');
				}	
			}
			
			else{
				if($current_password == $new_password){
					if($res=1){
						header('location:'.base_url().'admin/editpassword');
						$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password baru tidak boleh sama!</div>');
					}
				}
				else{	
					// // $this->db->set($password, $password_baru);
					// $this->db->where('username', $this->session->userdata('username'));
					$newpass = array(
						'id' => $id,
						// 'username' => $this->input->post('username'),
						'password' => $password_baru,
					);
					$res = $this->admin_model->update_password($newpass);
					if($res=1){
						header('location:'.base_url().'admin/editpassword');
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
						$this->load->view('admin/myprofile/editpassword', $data2);
					}
				}
			}
		}

	}

	function update_profile() {
		$query =  $this->session->userdata('id');
		$row = $this->admin_model->editprofile("where admin.`id`  = '$query'")->result_array();
		// $row = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$data2 = array(
			'id' => $row[0]['id'],
			'username' => $row[0]['username'],
		);
		$id = $this->session->userdata('id');
		$password = $this->input->post('current_password');
		$username = $this->input->post('username');
		$password = md5($password);
		// $new_password = $this->input->post('new_password');
		// $confirm_password = $this->input->post('konf_password');
		// $password = md5($current_password);
		// $password_baru = md5($new_password);
		$data['admin'] = $this->db->get_where('admin', ['id' => $this->session->userdata('id')])->row_array();
		//form validation
		
		$this->form_validation->set_rules('current_password','Current Password', 'required|trim');

		if($this->form_validation->run() == false){
			header('location:'.base_url().'admin/editprofile');
				$this->load->view('admin/myprofile/editprofile', $data2);
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Masukkan password</div>');
		}
		else{
			
			if($password == $data['admin']['password']){
				$newpass = array(
					'id' => $id,
					'username' => $username,
				);
				$res = $this->admin_model->update_profile($newpass);
				if($res=1){
					header('location:'.base_url().'admin/editprofile');
					$this->load->view('admin/myprofile/editprofile', $data2);
					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
				}
				
			}
			else{
				if($res=1){
					header('location:'.base_url().'admin/editprofile');
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah!</div>');
				}
			}
		}
	
		
		// if($this->form_validation->run() == false){
		// 	$newpass = array(
		// 		'id' => $id,
		// 		'username' => $this->input->post('username'),
		// 	);
		// 	$res = $this->admin_model->update_profile($newpass);
		// 	if($res=1){
		// 		header('location:'.base_url().'admin/editprofile');
		// 		$this->load->view('admin/myprofile/editprofile', $data2);
		// 		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
		// 	}
		// }
		// else if($new_password != $confirm_password){
		// 		header('location:'.base_url().'admin/editprofile');
		// 		$this->load->view('admin/myprofile/editprofile', $data2);
		// 		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password baru tidak sama dengan konfirmasi password!</div>');
		// }
		// else{
			
		// 	if($password != $data['admin']['password']){
		// 		if($res=1){
		// 			header('location:'.base_url().'admin/editprofile');
		// 			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah!</div>');
		// 		}	
		// 	}
			
			// else{
			// 	// if($current_password == $new_password){
			// 	// 	if($res=1){
			// 	// 		header('location:'.base_url().'admin/editprofile');
			// 	// 		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password baru tidak boleh sama!</div>');
			// 	// 	}
			// 	// }
					
			// 		$newpass = array(
			// 			'id' => $id,
			// 			'username' => $this->input->post('username'),
			// 			// 'password' => $password_baru,
			// 		);
			// 		$res = $this->admin_model->update_profile($newpass);
			// 		if($res=1){
			// 			header('location:'.base_url().'admin/editprofile');
			// 			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
			// 			$this->load->view('admin/myprofile/editprofile', $data2);
			// 		}
				
			// 
	}
	

	// ************************************************************************************
    //                                 galeri
    // ************************************************************************************

	function galeri(){
		$data = array('data_galeri' => $this->admin_model->ambil_galeri()->result_array(),);
		$this->load->view('admin/galeri/galeri', $data);
	}

	function tambah_galeri(){
		$this->load->view('admin/galeri/tambah_galeri');
	}

	function simpan_galeri(){
        $id_galeri  = '';
        $deskripsi     = $this->input->post('deskripsi');

        //upload file
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'galeri';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('berkas');
        $data_image = $this->upload->data('file_name');
        $location   = 'galeri/';
        $pict       = $location.$data_image;

        $data=array(
            'id_galeri'=>$id_galeri,
            'berkas'=> $pict,
            'deskripsi'=>$deskripsi
            );
        //simpan data 
        $this->admin_model->simpan('galeri', $data);

        $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
        redirect('admin/galeri/galeri');
    }

    function edit_galeri($kode = 0){
	    $row = $this->admin_model->edit_galeri("where galeri.`id_galeri`  = '$kode'")->result_array();

	    $data = array(
	      'id_galeri' => $row[0]['id_galeri'],
	      'berkas' => $row[0]['berkas'],
	      'deskripsi' => $row[0]['deskripsi'],
	    );
	    $this->load->view('admin/galeri/edit_galeri', $data);
  	}

  	function update_galeri(){
  		//upload file
		$id_galeri = $this->input->post('id_galeri');
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'galeri';

        $this->load->library('upload');
        $this->upload->initialize($config);

       
        if(!$this->upload->do_upload('berkas')){
			$data = array(
				'id_galeri' => $this->input->post('id_galeri'),
				'deskripsi' => $this->input->post('deskripsi'),
			);
		}
		else{
			//ambil data image
			$this->upload->do_upload('berkas');
			$data_image = $this->upload->data('file_name');
			$location   = 'galeri/';
			$pict       = $location.$data_image;

			$data = array(
				'id_galeri' => $this->input->post('id_galeri'),
				'berkas' =>$pict,
				'deskripsi' => $this->input->post('deskripsi'),
			);
		}

		$this->db->where('id_galeri', $id_galeri);
	    $res = $this->admin_model->update_galeri($data);
	    if($res=1){
	      header('location:'.base_url().'admin/galeri');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	function hapus_galeri($kode = 0){
	    $result = $this->admin_model->Hapus('galeri',array('id_galeri' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/galeri');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	

	// ************************************************************************************
    //                                 mata pelajaran
    // ************************************************************************************

	function mapel(){
		$data['data_mapel'] = $this->admin_model->ambil_mapel()->result_array();
		
		// $data = array('data_mapel' => $this->admin_model->ambil_mapel()->result_array(),);
		$i = 0;
		foreach($data['data_mapel'] as $row){
			$i++;
			$datas= $row['id_mapel'];
			$data2[$i] = $this->admin_model ->ambil_mapel_dipakai($datas);
		}
		$data['count'] = $data2;
		
		// var_dump($query);
		$this->load->view('admin/mapel/mapel', $data);
	}

	function tambah_mapel(){
		$this->load->view('admin/mapel/tambah_mapel');
	}

	function simpan_mapel(){
	    $id_mapel	= '';
	    $mapel= $_POST['mapel']; 
		$check = $this->admin_model->check_mapel($mapel);
		if($check == 0){
			$data = array(  
				'id_mapel'=> $id_mapel,
				'nama'=> $mapel,
				);
	  
			  $this->admin_model->simpan('mapel', $data);
			  $this->session->set_flashdata("sukses", "
				  <div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
				  </div>");
			  redirect('admin/mapel/mapel');
		}
	   else{
		$this->session->set_flashdata("sukses", "
		<div class='alert alert-warning alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Data Sudah Ada!</h4> Data Tidak Ditambahkan
		</div>");
		redirect('admin/tambah_mapel');
	   }
  	}

  	function edit_mapel($kode = 0){
	    $row = $this->admin_model->edit_mapel("where mapel.`id_mapel`  = '$kode'")->result_array();

	    $data = array(
	      'id_mapel' => $row[0]['id_mapel'],
	      'nama' => $row[0]['nama'],
	    );
	    $this->load->view('admin/mapel/edit_mapel', $data);
  	}

  	function update_mapel(){
	    $data = array(
	      'id_mapel' => $this->input->post('id_mapel'),
	      'nama' => $this->input->post('nama'),
	      );

	    $res = $this->admin_model->update_mapel($data);
	    if($res=1){
	      header('location:'.base_url().'admin/mapel/mapel');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	function hapus_mapel($kode = 0){
	    $result = $this->admin_model->hapus('mapel',array('id_mapel' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/mapel/mapel');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	// ************************************************************************************
    //                          guru
    // ************************************************************************************

	function guru(){
		$data = array('data_guru' => $this->admin_model->ambil_guru()->result_array(),);
		$this->load->view('admin/guru/guru', $data);
	}

	function tambah_guru(){
		$data = array('data_mapel' => $this->admin_model->ambil_mapel()->result_array(),);
		$this->load->view('admin/guru/tambah_guru', $data);
	}

	function simpan_guru(){
	    $id_guru	= '';
	    $nama= $_POST['nama']; 
	    $alamat= $_POST['alamat'];
		$id_mapel= $_POST['mapel'];
		$jabatan= $_POST['jabatan'];
		
		//upload file 
		$config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'galeriguru';
		
		$this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('foto');
        $data_image = $this->upload->data('file_name');
        $location   = 'galeriguru/';
        $pict       = $location.$data_image;

	    $data = array(  
	      'id_guru'=> $id_guru,
	      'nama'=> $nama,
	      'alamat'=> $alamat,
		  'id_mapel'=> $id_mapel,
		  'jabatan' => $jabatan,
		  'foto'=> $pict
	      );

	    $this->admin_model->simpan('guru', $data);
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
	    redirect('admin/guru/guru');
  	}

  	function hapus_guru($kode = 0){
	    $result = $this->admin_model->Hapus('guru',array('id_guru' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/guru/guru');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_guru($kode = 0){

	    $row = $this->admin_model->edit_guru("where guru.`id_guru`  = '$kode'")->result_array();
		$mapel = $row[0]['id_mapel'];
	    $data = array(
	      'id_guru' => $row[0]['id_guru'],
	      'nama' => $row[0]['nama'],
		  'alamat' => $row[0]['alamat'],
		  'mapel' => $this->admin_model->edit_mapel("where mapel.`id_mapel` = '$mapel'")->result_array(),
		  'id_mapel' => $this->admin_model->ambil_mapel()->result_array(),
		  'foto' => $row[0]['foto'],
		  'jabatan' => $row[0]['jabatan'],
		);
		
		$this->load->view('admin/guru/edit_guru', $data);
		
  	}

  	function update_guru(){
		$data = array('data_mapel' => $this->admin_model->ambil_mapel()->result_array(),);

		//upload file
		$id_guru = $this->input->post('id_guru');
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'galeriguru';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        if(!$this->upload->do_upload('foto')){
			$data = array(
				'id_guru' => $this->input->post('id_guru'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'id_mapel' => $this->input->post('mapel'),
				'jabatan' => $this->input->post('jabatan'),
				);
		}
		else{
			$this->upload->do_upload('foto');
			$data_image = $this->upload->data('file_name');
			$location   = 'galeriguru/';
			$pict       = $location.$data_image;
			
			$data = array(
			  'id_guru' => $this->input->post('id_guru'),
			  'nama' => $this->input->post('nama'),
			  'alamat' => $this->input->post('alamat'),
			  'id_mapel' => $this->input->post('mapel'),
			  'jabatan' => $this->input->post('jabatan'),
			  'foto' => $pict,
			);
		}

		$this->db->where('id_guru', $id_guru);
	    $res = $this->admin_model->update_guru($data);
	    if($res=1){
	      header('location:'.base_url().'admin/guru/guru');
		  $this->session->set_flashdata("sukses", "
		  <div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
		  </div>");
	    }
	}

	// ************************************************************************************
    //                          			Staff
    // ************************************************************************************

	function staff(){
		$data = array('data_staff' => $this->admin_model->ambil_staff()->result_array(),);
		$this->load->view('admin/staff/staff', $data);
	}
	function tambah_staff(){
		$this->load->view('admin/staff/tambah_staff');
	}

	function simpan_staff(){
	    $id_staff	= '';
	    $nama= $_POST['nama']; 
	    $alamat= $_POST['alamat'];
		$jabatan= $_POST['jabatan'];
		
		//upload file 
		$id_staff = $this->input->post('id_staff');
		$config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'galeristaff';
		
		$this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        
			$this->upload->do_upload('gambar_staff');
			$data_image = $this->upload->data('file_name');
			$location   = 'galeristaff/';
			$pict       = $location.$data_image;

			$data = array(  
				'id_staff'=> $id_staff,
				'nama'=> $nama,
				'alamat'=> $alamat,
				'jabatan' => $jabatan,
				'gambar_staff'=> $pict
				);
	  
			  $this->admin_model->simpan('staff', $data);
			  $this->session->set_flashdata("sukses", "
				  <div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
				  </div>");
			  redirect('admin/staff/staff');
			
	}

  	function hapus_staff($kode = 0){
	    $result = $this->admin_model->Hapus('staff',array('id_staff' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/staff/staff');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_staff($kode = 0){
	    $row = $this->admin_model->edit_staff("where staff.`id_staff`  = '$kode'")->result_array();

	    $data = array(
	      'id_staff' => $row[0]['id_staff'],
	      'nama' => $row[0]['nama'],
	      'alamat' => $row[0]['alamat'],
		  'jabatan' => $row[0]['jabatan'],
		  'gambar_staff' => $row[0]['gambar_staff'],
	    );
	    $this->load->view('admin/staff/edit_staff', $data);
  	}

  	function update_staff(){

		 //upload file
		 $id_staff = $this->input->post('id_staff');
		 $config['max_size']=2048;
		 $config['allowed_types']="jpg|jpeg|png";
		 $config['remove_spaces']=TRUE;
		 $config['overwrite']=TRUE;
		 $config['upload_path']=FCPATH.'galeristaff';
 
		 $this->load->library('upload');
		 $this->upload->initialize($config);
 
		 //ambil data image
		 if(!$this->upload->do_upload('gambar_staff')){
			$data = array(  
				'id_staff' => $this->input->post('id_staff'),
				'nama' =>$this->input->post('nama'),
				'alamat' =>$this->input->post('alamat'),
				'jabatan' =>$this->input->post('jabatan'),
				);
		}
		else{
			$this->upload->do_upload('gambar_staff');
			$data_image = $this->upload->data('file_name');
			$location   = 'galeristaff/';
			$pict       = $location.$data_image;

			$data = array(  
				'id_staff' => $this->input->post('id_staff'),
				'nama' =>$this->input->post('nama'),
				'alamat' =>$this->input->post('alamat'),
				'jabatan' =>$this->input->post('jabatan'),
				'gambar_staff'=>$pict
			);
		}

		$this->db->where('id_staff', $id_staff);
	    $res= $this->admin_model->update_staff($data);
		if($res=1){
			header('location:'.base_url().'admin/staff/staff');
			$this->session->set_flashdata("sukses", "
			  <div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
			  </div>");
		}
	}


	// ************************************************************************************
    //                          			Prestas
    // ************************************************************************************

	function prestasi(){
		$data = array('data_prestasi' => $this->admin_model->ambil_prestasi()->result_array(),);
		$this->load->view('admin/prestasi/prestasi', $data);
	}

	function tambah_prestasi(){
		$this->load->view('admin/prestasi/tambah_prestasi');
	}

	function simpan_prestasi(){
	    $id_pres	= '';
	    $nama_pres= $_POST['nama_pres']; 
	    $juara_pres= $_POST['juara_pres'];
		$lomba_pres= $_POST['lomba_pres'];
		$tingkat_pres= $_POST['tingkat_pres'];
		$tahun_pres= $_POST['tahun_pres'];
		
		//upload file 
		$config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'galeripres';
		
		$this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar_pres');
        $data_image = $this->upload->data('file_name');
        $location   = 'galeripres/';
        $pict       = $location.$data_image;

	    $data = array(  
	      'id_pres'=> $id_pres,
	      'nama_pres'=> $nama_pres,
		  'juara_pres' => $juara_pres,
		  'lomba_pres' => $lomba_pres,
		  'tingkat_pres' => $tingkat_pres,
		  'tahun_pres' => $tahun_pres,
		  'gambar_pres' => $pict,
	      );

	    $this->admin_model->simpan('prestasi', $data);
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
	    redirect('admin/prestasi/prestasi');
  	}

  	function hapus_prestasi($kode = 0){
	    $result = $this->admin_model->Hapus('prestasi',array('id_pres' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/prestasi/prestasi');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_prestasi($kode = 0){
		
	    $row = $this->admin_model->edit_prestasi("where prestasi.`id_pres`  = '$kode'")->result_array();
	
	    $data = array(
	      'id_pres' => $row[0]['id_pres'],
	      'nama_pres' => $row[0]['nama_pres'],
	      'juara_pres' => $row[0]['juara_pres'],
		  'lomba_pres' => $row[0]['lomba_pres'],
		  'tingkat_pres' => $row[0]['tingkat_pres'],
		  'tahun_pres' => $row[0]['tahun_pres'],
		  'gambar_pres' => $row[0]['gambar_pres'],
		);

		$this->load->view('admin/prestasi/edit_prestasi', $data);
		
  	}

  	function update_prestasi(){
		$data = array('data_prestasi' => $this->admin_model->ambil_prestasi()->result_array(),);

		//upload file
		$id_pres = $this->input->post('id_pres');
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'galeripres';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        if(!$this->upload->do_upload('gambar_pres')){
			$data = array(
				'id_pres' => $this->input->post('id_pres'),
				'nama_pres' => $this->input->post('nama_pres'),
				'juara_pres' => $this->input->post('juara_pres'),
				'lomba_pres' => $this->input->post('lomba_pres'),
				'tingkat_pres' => $this->input->post('tingkat_pres'),
				'tahun_pres' => $this->input->post('tahun_pres'),
			  );
		}
		else{
			$this->upload->do_upload('gambar_pres');
			$data_image = $this->upload->data('file_name');
			$location   = 'galeripres/';
			$pict       = $location.$data_image;
			
			$data = array(
				'id_pres' => $this->input->post('id_pres'),
				'nama_pres' => $this->input->post('nama_pres'),
				'juara_pres' => $this->input->post('juara_pres'),
				'lomba_pres' => $this->input->post('lomba_pres'),
				'tingkat_pres' => $this->input->post('tingkat_pres'),
				'tahun_pres' => $this->input->post('tahun_pres'),
				'gambar_pres' => $pict,
			);
		}
        
		$this->db->where('id_pres', $id_pres);
	    $res = $this->admin_model->update_prestasi($data);
	    if($res=1){
	      header('location:'.base_url().'admin/prestasi/prestasi');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	// ************************************************************************************
    //                               siswa
    // ************************************************************************************

		
	function siswa_i(){
		$data = array('siswa_i' => $this->admin_model->ambil_siswa_i()->result_array(),);
		$this->load->view('admin/siswa_i', $data);
	}

	function tambah_siswa_i(){
		$this->load->view('admin/tambah_siswa_i');
	}

	function simpan_siswa(){
	    $id_siswa	= '';
	    $nis= $_POST['nis']; 
	    $nama= $_POST['nama']; 
	    $jenis_kelamin= $_POST['jenis_kelamin']; 
	    $angkatan= $_POST['angkatan']; 
	    $alamat= $_POST['alamat'];
	    $kelas= $_POST['kelas']; 

	    if($kelas == 'Kelas I'){
	    	$kelasnya = 'I';
	    }elseif($kelas == 'Kelas II'){
	    	$kelasnya = 'II';
	    }else{
	    	$kelasnya = 'III';	
	    }

	    $data = array(  
	      'id_siswa'=> $id_siswa,
	      'nis'=> $nis,
	      'nama'=> $nama,
	      'jenis_kelamin'=> $jenis_kelamin,
	      'angkatan'=> $angkatan,
	      'alamat'=> $alamat,
	      'kelas'=> $kelasnya,
	      );

	    $this->admin_model->simpan('siswa', $data);
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
	    if($kelas == 'Kelas I'){
	   		 redirect('admin/siswa_i');
	    }elseif($kelas == 'Kelas II'){
	   		 redirect('admin/siswa_ii');
	    }else{
	    	 redirect('admin/siswa_iii');
	    }
  	}

  	function hapus_siswa_i($kode = 0){
	    $result = $this->admin_model->Hapus('siswa',array('id_siswa' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/siswa_i');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_siswa_i($kode = 0){
	    $row = $this->admin_model->edit_siswa("where siswa.`id_siswa`  = '$kode'")->result_array();

	    $data = array(
	      'id_siswa' => $row[0]['id_siswa'],
	      'nis' => $row[0]['nis'],
	      'nama' => $row[0]['nama'],
	      'jenis_kelamin' => $row[0]['jenis_kelamin'],
	      'angkatan' => $row[0]['angkatan'],
	      'alamat' => $row[0]['alamat'],
	      'kelas' => $row[0]['kelas'],
	    );

	    $this->load->view('admin/edit_siswa_i', $data);
  	}

  	function update_siswa_i(){
	    $data = array(
	      'id_siswa' => $this->input->post('id_siswa'),
	      'nis' => $this->input->post('nis'),
	      'nama' => $this->input->post('nama'),
	      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	      'angkatan' => $this->input->post('angkatan'),
	      'alamat' => $this->input->post('alamat'),
	      'kelas' => $this->input->post('kelas'),
	      );

	    $res = $this->admin_model->update_siswa($data);
	    if($res=1){
	      header('location:'.base_url().'admin/siswa_i');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	function siswa_ii(){
		$data = array('siswa_ii' => $this->admin_model->ambil_siswa_ii()->result_array(),);
		$this->load->view('admin/siswa_ii', $data);
	}

	function tambah_siswa_ii(){
		$this->load->view('admin/tambah_siswa_ii');
	}

  	function hapus_siswa_ii($kode = 0){
	    $result = $this->admin_model->Hapus('siswa',array('id_siswa' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/siswa_ii');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_siswa_ii($kode = 0){
	    $row = $this->admin_model->edit_siswa("where siswa.`id_siswa`  = '$kode'")->result_array();

	    $data = array(
	      'id_siswa' => $row[0]['id_siswa'],
	      'nis' => $row[0]['nis'],
	      'nama' => $row[0]['nama'],
	      'jenis_kelamin' => $row[0]['jenis_kelamin'],
	      'angkatan' => $row[0]['angkatan'],
	      'alamat' => $row[0]['alamat'],
	      'kelas' => $row[0]['kelas'],
	    );

	    $this->load->view('admin/edit_siswa_ii', $data);
  	}

  	function update_siswa_ii(){
	    $data = array(
	      'id_siswa' => $this->input->post('id_siswa'),
	      'nis' => $this->input->post('nis'),
	      'nama' => $this->input->post('nama'),
	      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	      'angkatan' => $this->input->post('angkatan'),
	      'alamat' => $this->input->post('alamat'),
	      'kelas' => $this->input->post('kelas'),
	      );

	    $res = $this->admin_model->update_siswa($data);
	    if($res=1){
	      header('location:'.base_url().'admin/siswa_ii');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	function siswa_iii(){
		$data = array('siswa_iii' => $this->admin_model->ambil_siswa_iii()->result_array(),);
		$this->load->view('admin/siswa_iii', $data);
	}

	function tambah_siswa_iii(){
		$this->load->view('admin/tambah_siswa_iii');
	}

  	function hapus_siswa_iii($kode = 0){
	    $result = $this->admin_model->Hapus('siswa',array('id_siswa' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/siswa_iii');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_siswa_iii($kode = 0){
	    $row = $this->admin_model->edit_siswa("where siswa.`id_siswa`  = '$kode'")->result_array();

	    $data = array(
	      'id_siswa' => $row[0]['id_siswa'],
	      'nis' => $row[0]['nis'],
	      'nama' => $row[0]['nama'],
	      'jenis_kelamin' => $row[0]['jenis_kelamin'],
	      'angkatan' => $row[0]['angkatan'],
	      'alamat' => $row[0]['alamat'],
	      'kelas' => $row[0]['kelas'],
	    );

	    $this->load->view('admin/edit_siswa_iii', $data);
  	}

  	function update_siswa_iii(){
	    $data = array(
	      'id_siswa' => $this->input->post('id_siswa'),
	      'nis' => $this->input->post('nis'),
	      'nama' => $this->input->post('nama'),
	      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	      'angkatan' => $this->input->post('angkatan'),
	      'alamat' => $this->input->post('alamat'),
	      'kelas' => $this->input->post('kelas'),
	      );

	    $res = $this->admin_model->update_siswa($data);
	    if($res=1){
	      header('location:'.base_url().'admin/siswa_iii');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}


	// ************************************************************************************
    //                                 agenda
    // ************************************************************************************

	function agenda(){
		$data = array('data_agenda' => $this->admin_model->ambil_agenda()->result_array(),);
		$this->load->view('admin/agenda/agenda', $data);
	}

	function tambah_agenda(){
		$this->load->view('admin/agenda/tambah_agenda');
	}

	function detail_agenda($kode = 0){
	    $row = $this->admin_model->edit_agenda("where agenda.`id_agenda`  = '$kode'")->result_array();

	    $data = array(
	      'id_agenda' => $row[0]['id_agenda'],
	      'judul_agenda' => $row[0]['judul_agenda'],
	      'isi_agenda' => $row[0]['isi_agenda'],
	      'gambar_agenda' => $row[0]['gambar_agenda'],
	      'penulis_agenda' => $row[0]['penulis_agenda'],
		  'tgl_agenda' => $row[0]['tgl_agenda'],
	    );

	    $this->load->view('admin/agenda/detail_agenda', $data);
  	}

  	function simpan_agenda(){
        $id_agenda  = '';
		$judul_agenda     = $this->input->post('judul_agenda');
        $isi_agenda     = $this->input->post('isi_agenda');
        $penulis_agenda     = $this->input->post('penulis_agenda');
		$tgl_agenda =  date('Y-m-d');

        //upload file
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'agenda';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar_agenda');
        $data_image = $this->upload->data('file_name');
        $location   = 'agenda/';
        $pict       = $location.$data_image;

        $data=array(
            'id_agenda'=>$id_agenda,
            'judul_agenda'=>$judul_agenda,
            'isi_agenda'=>$isi_agenda,
            'gambar_agenda'=> $pict,
            'penulis_agenda'=>$penulis_agenda,
            'tgl_agenda'=>$tgl_agenda
			);
			
        //simpan data 
        $this->admin_model->simpan_agenda('agenda', $data);

        $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
        redirect('admin/agenda/agenda');
    }

    function hapus_agenda($kode = 0){
	    $result = $this->admin_model->Hapus('agenda',array('id_agenda' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/agenda/agenda');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_agenda($kode = 0){
	    $row = $this->admin_model->edit_agenda("where agenda.`id_agenda`  = '$kode'")->result_array();

	    $data = array(
	      'id_agenda' => $row[0]['id_agenda'],
	      'judul_agenda' => $row[0]['judul_agenda'],
	      'isi_agenda' => $row[0]['isi_agenda'],
	      'gambar_agenda' => $row[0]['gambar_agenda'],
	      'penulis_agenda' => $row[0]['penulis_agenda'],
	      'tgl_agenda' => $row[0]['tgl_agenda'],
	    );

	    $this->load->view('admin/agenda/edit_agenda', $data);
  	}

  	function update_agenda(){
  		$tgl_agenda =  date('Y-m-d');
  		 //upload file
		$id_agenda = $this->input->post('id_agenda');
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'agenda';

        $this->load->library('upload');
        $this->upload->initialize($config);

		if(!$this->upload->do_upload('gambar_agenda') ){
			$data = array(
				'id_agenda' => $this->input->post('id_agenda'),
				'judul_agenda' => $this->input->post('judul_agenda'),
				'isi_agenda' => $this->input->post('isi_agenda'),
				'penulis_agenda' => $this->input->post('penulis_agenda'),
				'tgl_agenda' => $tgl_agenda,
			);
		}
		else{
			 //ambil data image
			 $this->upload->do_upload('gambar_agenda');
			 $data_image = $this->upload->data('file_name');
			 $location   = 'agenda/';
			 $pict       = $location.$data_image;
	 
			 $data = array(
			   'id_agenda' => $this->input->post('id_agenda'),
			   'judul_agenda' => $this->input->post('judul_agenda'),
			   'isi_agenda' => $this->input->post('isi_agenda'),
			   'gambar_agenda' => $pict,
			   'penulis_agenda' => $this->input->post('penulis_agenda'),
			   'tgl_agenda' => $tgl_agenda,
			   );
		}

		$this->db->where('id_agenda', $id_agenda);
	    $res = $this->admin_model->update_agenda($data);
	    if($res=1){
	      header('location:'.base_url().'admin/agenda/agenda');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	// ************************************************************************************
    //                                 berita
    // ************************************************************************************

	function berita(){
		$data = array('data_berita' => $this->admin_model->ambil_berita()->result_array(),);
		$this->load->view('admin/berita/berita', $data);
	}

	function tambah_berita(){
		$this->load->view('admin/berita/tambah_berita');
	}

	function detail_berita($kode = 0){
	    $row = $this->admin_model->edit_berita("where berita.`id_berita`  = '$kode'")->result_array();

	    $data = array(
	      'id_berita' => $row[0]['id_berita'],
	      'judul_berita' => $row[0]['judul_berita'],
	      'isi_berita' => $row[0]['isi_berita'],
	      'gambar_berita' => $row[0]['gambar_berita'],
	      'penulis_berita' => $row[0]['penulis_berita'],
	      'tgl_berita' => $row[0]['tgl_berita'],
	    );

	    $this->load->view('admin/berita/detail_berita', $data);
  	}

  	function simpan_berita(){
        $id_berita  = '';
        $judul_berita     = $this->input->post('judul');
        $isi_berita     = $this->input->post('isi');
        $penulis_berita     = $this->input->post('penulis');
		$tgl_berita =  date('Y-m-d');

        //upload file
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'berita';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar');
        $data_image = $this->upload->data('file_name');
        $location   = 'berita/';
        $pict       = $location.$data_image;

        $data=array(
            'id_berita'=>$id_berita,
            'judul_berita'=>$judul_berita,
            'isi_berita'=>$isi_berita,
            'gambar_berita'=> $pict,
            'penulis_berita'=>$penulis_berita,
            'tgl_berita'=>$tgl_berita
			);
			
        //simpan data 
        $this->admin_model->simpan('berita', $data);
		$this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
	    redirect('admin/berita/berita');
    }

    function hapus_berita($kode = 0){
	    $result = $this->admin_model->Hapus('berita',array('id_berita' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/berita/berita');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_berita($kode = 0){
	    $row = $this->admin_model->edit_berita("where berita.`id_berita`  = '$kode'")->result_array();

	    $data = array(
	      'id_berita' => $row[0]['id_berita'],
	      'judul_berita' => $row[0]['judul_berita'],
	      'isi_berita' => $row[0]['isi_berita'],
	      'gambar_berita' => $row[0]['gambar_berita'],
	      'penulis_berita' => $row[0]['penulis_berita'],
	      'tgl_berita' => $row[0]['tgl_berita'],
	    );

	    $this->load->view('admin/berita/edit_berita', $data);
  	}

  	function update_berita(){
		$tgl_berita =  date('Y-m-d');
  		 //upload file
		$id_berita = $this->input->post('id_berita');
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'berita';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        if(!$this->upload->do_upload('gambar')){
			$data = array(
				'id_berita' => $this->input->post('id_berita'),
				'judul_berita' => $this->input->post('judul'),
				'isi_berita' => $this->input->post('isi'),
				'penulis_berita' => $this->input->post('penulis'),
				'tgl_berita' => $tgl_berita,
			);
		}
		else{
			$this->upload->do_upload('gambar');
			$data_image = $this->upload->data('file_name');
			$location   = 'berita/';
			$pict       = $location.$data_image;
	
			$data = array(
			  'id_berita' => $this->input->post('id_berita'),
			  'judul_berita' => $this->input->post('judul'),
			  'isi_berita' => $this->input->post('isi'),
			  'gambar_berita' => $pict,
			  'penulis_berita' => $this->input->post('penulis'),
			  'tgl_berita' => $tgl_berita,
			  );
		}

		$this->db->where('id_berita', $id_berita);
	    $res = $this->admin_model->update_berita($data);
	    if($res=1){
	      header('location:'.base_url().'admin/berita/berita');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	// ************************************************************************************
    //                                 fasilitas
    // ************************************************************************************

	function fasilitas(){
		$data = array('data_fasilitas' => $this->admin_model->ambil_fasilitas()->result_array(),);
		$this->load->view('admin/fasilitas/fasilitas', $data);
	}

	function tambah_fasilitas(){
		$this->load->view('admin/fasilitas/tambah_fasilitas');
	
	}

	function detail_fasilitas($kode = 0){
	    $row = $this->admin_model->edit_fasilitas("where fasilitas.`id_fasilitas`  = '$kode'")->result_array();

	    $data = array(
	      'id_fasilitas' => $row[0]['id_fasilitas'],
	      'judul_fasilitas' => $row[0]['judul_fasilitas'],
	      'isi_fasilitas' => $row[0]['isi_fasilitas'],
	      'gambar_fasilitas' => $row[0]['gambar_fasilitas'],
	    );

	    $this->load->view('admin/fasilitas/detail_fasilitas', $data);
  	}

  	function simpan_fasilitas(){
        $id_fasilitas  = '';
        $judul_fasilitas     = $this->input->post('judul');
        $isi_fasilitas     = $this->input->post('isi');
		
		//upload file
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'fasilitas';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar');
        $data_image = $this->upload->data('file_name');
        $location   = 'fasilitas/';
        $pict       = $location.$data_image;
	
        $data=array(
            'id_fasilitas'=>$id_fasilitas,
            'judul_fasilitas'=>$judul_fasilitas,
            'isi_fasilitas'=>$isi_fasilitas,
            'gambar_fasilitas'=> $pict,
			);
		
		
        //simpan data 
		$this->admin_model->simpan('fasilitas', $data);
		$this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
	    redirect('admin/fasilitas/fasilitas');
       
    }

    function hapus_fasilitas($kode = 0){
	    $result = $this->admin_model->Hapus('fasilitas',array('id_fasilitas' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/fasilitas/fasilitas');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_fasilitas($kode = 0){
	    $row = $this->admin_model->edit_fasilitas("where fasilitas.`id_fasilitas`  = '$kode'")->result_array();

	    $data = array(
	      'id_fasilitas' => $row[0]['id_fasilitas'],
	      'judul_fasilitas' => $row[0]['judul_fasilitas'],
	      'isi_fasilitas' => $row[0]['isi_fasilitas'],
	      'gambar_fasilitas' => $row[0]['gambar_fasilitas'],
	    );

	    $this->load->view('admin/fasilitas/edit_fasilitas', $data);
  	}

  	function update_fasilitas(){
		
  		 //upload file
		$id_fasilitas = $this->input->post('id_fasilitas');
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'fasilitas';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        if(!$this->upload->do_upload('gambar')){
			$data = array(
				'id_fasilitas' => $this->input->post('id_fasilitas'),
				'judul_fasilitas' => $this->input->post('judul'),
				'isi_fasilitas' => $this->input->post('isi'),
			);
	  	}
		else{
			$this->upload->do_upload('gambar');
			$data_image = $this->upload->data('file_name');
        	$location   = 'fasilitas/';
        	$pict       = $location.$data_image;

			$data = array(
				'id_fasilitas' => $this->input->post('id_fasilitas'),
				'judul_fasilitas' => $this->input->post('judul'),
				'isi_fasilitas' => $this->input->post('isi'),
				'gambar_fasilitas' => $pict,
			);
		}
		
		$this->db->where('id_fasilitas', $id_fasilitas);
	    $res = $this->admin_model->update_fasilitas($data);
	    if($res=1){
	      header('location:'.base_url().'admin/fasilitas/fasilitas');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	// ************************************************************************************
    //                                 Struktur Organisasi
    // ************************************************************************************

	function struktur(){
		$data = array('data_struktur' => $this->admin_model->ambil_struktur()->result_array(),);
		$this->load->view('admin/struktur/struktur', $data);
	}

	function tambah_struktur(){
		$this->load->view('admin/struktur/tambah_struktur');
	}

	function detail_struktur($kode = 0){
	    $row = $this->admin_model->edit_struktur("where struktur.`id_struktur`  = '$kode'")->result_array();

	    $data = array(
	      'id_struktur' => $row[0]['id_struktur'],
	      'judul_struktur' => $row[0]['judul_struktur'],
	      'isi_struktur' => $row[0]['isi_struktur'],
	    );

	    $this->load->view('admin/struktur/detail_struktur', $data);
  	}

  	function simpan_struktur(){
        $id_struktur  = '';
        $judul_struktur     = $this->input->post('judul');
        $isi_struktur     = $this->input->post('isi');

        $data=array(
            'id_struktur'=>$id_struktur,
            'judul_struktur'=>$judul_struktur,
            'isi_struktur'=>$isi_struktur,
			);
			
        //simpan data 
        $this->admin_model->simpan('struktur', $data);
	
			$this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
		
        redirect('admin/struktur/struktur');
    }

    function hapus_struktur($kode = 0){
	    $result = $this->admin_model->Hapus('struktur',array('id_struktur' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/struktur/struktur');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_struktur($kode = 0){
	    $row = $this->admin_model->edit_struktur("where struktur.`id_struktur`  = '$kode'")->result_array();

	    $data = array(
	      'id_struktur' => $row[0]['id_struktur'],
	      'judul_struktur' => $row[0]['judul_struktur'],
	      'isi_struktur' => $row[0]['isi_struktur'],
	    );
	    $this->load->view('admin/struktur/edit_struktur', $data);
  	}

  	function update_struktur(){
		
	    $data = array(
	      'id_struktur' => $this->input->post('id_struktur'),
	      'judul_struktur' => $this->input->post('judul'),
		  'isi_struktur' => $this->input->post('isi'),
	      );

	    $res = $this->admin_model->update_struktur($data);
	    if($res=1){
	      header('location:'.base_url().'admin/struktur/struktur');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	// ************************************************************************************
    //                                 berita
    // ************************************************************************************

	function pengumuman(){
		$data = array('data_pengumuman' => $this->admin_model->ambil_pengumuman()->result_array(),);
		$this->load->view('admin/pengumuman/pengumuman', $data);
	}

	function tambah_pengumuman(){
		$this->load->view('admin/pengumuman/tambah_pengumuman');
	}

	function detail_pengumuman($kode = 0){
	    $row = $this->admin_model->edit_pengumuman("where pengumuman.`id_pengumuman`  = '$kode'")->result_array();

	    $data = array(
	      'id_pengumuman' => $row[0]['id_pengumuman'],
	      'judul_pengumuman' => $row[0]['judul_pengumuman'],
	      'isi_pengumuman' => $row[0]['isi_pengumuman'],
	      'gambar_pengumuman' => $row[0]['gambar_pengumuman'],
	      'penulis_pengumuman' => $row[0]['penulis_pengumuman'],
	      'tgl_pengumuman' => $row[0]['tgl_pengumuman'],
	    );

	    $this->load->view('admin/pengumuman/detail_pengumuman', $data);
  	}

  	function simpan_pengumuman(){
        $id_pengumuman  = '';
        $judul_pengumuman     = $this->input->post('judul');
        $isi_pengumuman     = $this->input->post('isi');
        $penulis_pengumuman     = $this->input->post('penulis');
		$tgl_pengumuman =  date('Y-m-d');

        //upload file
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'pengumuman';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar');
        $data_image = $this->upload->data('file_name');
        $location   = 'pengumuman/';
        $pict       = $location.$data_image;

        $data=array(
            'id_pengumuman'=>$id_pengumuman,
            'judul_pengumuman'=>$judul_pengumuman,
            'isi_pengumuman'=>$isi_pengumuman,
            'gambar_pengumuman'=> $pict,
            'penulis_pengumuman'=>$penulis_pengumuman,
            'tgl_pengumuman'=>$tgl_pengumuman
			);
			
        //simpan data 
        $this->admin_model->simpan('pengumuman', $data);

        $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
        redirect('admin/pengumuman/pengumuman');
	}


    function hapus_pengumuman($kode = 0){
	    $result = $this->admin_model->Hapus('pengumuman',array('id_pengumuman' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/pengumuman/pengumuman');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_pengumuman($kode = 0){
	    $row = $this->admin_model->edit_pengumuman("where pengumuman.`id_pengumuman`  = '$kode'")->result_array();

	    $data = array(
	      'id_pengumuman' => $row[0]['id_pengumuman'],
	      'judul_pengumuman' => $row[0]['judul_pengumuman'],
	      'isi_pengumuman' => $row[0]['isi_pengumuman'],
	      'gambar_pengumuman' => $row[0]['gambar_pengumuman'],
	      'penulis_pengumuman' => $row[0]['penulis_pengumuman'],
	      'tgl_pengumuman' => $row[0]['tgl_pengumuman'],
	    );

	    $this->load->view('admin/pengumuman/edit_pengumuman', $data);
  	}

  	function update_pengumuman(){
		$tgl_pengumuman = date('Y-m-d');

  		 //upload file
		$id_pengumuman = $this->input->post('id_pengumuman');
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'pengumuman';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        if(!$this->upload->do_upload('gambar')){
			$data = array(
				'id_pengumuman' => $this->input->post('id_pengumuman'),
				'judul_pengumuman' => $this->input->post('judul'),
				'isi_pengumuman' => $this->input->post('isi'),
				'penulis_pengumuman' => $this->input->post('penulis'),
				'tgl_pengumuman' => $tgl_pengumuman,
				);
		}
		else{
			$this->upload->do_upload('gambar');
			$data_image = $this->upload->data('file_name');
			$location   = 'pengumuman/';
			$pict       = $location.$data_image;
	
			$data = array(
			  'id_pengumuman' => $this->input->post('id_pengumuman'),
			  'judul_pengumuman' => $this->input->post('judul'),
			  'isi_pengumuman' => $this->input->post('isi'),
			  'gambar_pengumuman' => $pict,
			  'penulis_pengumuman' => $this->input->post('penulis'),
			  'tgl_pengumuman' => $tgl_pengumuman,
			  );
		}
    
		$this->db->where('id_pengumuman', $id_pengumuman);
	    $res = $this->admin_model->update_pengumuman($data);
	    if($res=1){
	      header('location:'.base_url().'admin/pengumuman/pengumuman');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	
	// ************************************************************************************
    //                                 PPDB
    // ************************************************************************************

	function ppdb(){
		$data = array('data_ppdb' => $this->admin_model->ambil_ppdb()->result_array(),);
		$this->load->view('admin/ppdb/ppdb', $data);
	}

	function tambah_ppdb(){
		$this->load->view('admin/ppdb/tambah_ppdb');
	}

	function detail_ppdb($kode = 0){
	    $row = $this->admin_model->edit_ppdb("where ppdb.`id_ppdb`  = '$kode'")->result_array();

	    $data = array(
	      'id_ppdb' => $row[0]['id_ppdb'],
	      'judul_ppdb' => $row[0]['judul_ppdb'],
	      'isi_ppdb' => $row[0]['isi_ppdb'],
	      'gambar_ppdb' => $row[0]['gambar_ppdb'],
	      'penulis_ppdb' => $row[0]['penulis_ppdb'],
		  'tgl_ppdb' => $row[0]['tgl_ppdb'],
		  'file_ppdb' => $row[0]['file_ppdb'],
	    );

	    $this->load->view('admin/ppdb/detail_ppdb', $data);
  	}

  	function simpan_ppdb(){
        $id_ppdb  = '';
        $judul_ppdb     = $this->input->post('judul');
        $isi_ppdb     = $this->input->post('isi');
        $penulis_ppdb     = $this->input->post('penulis');
		$tgl_ppdb =  date('Y-m-d');

        //upload file image
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'ppdb';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar_ppdb');
        $data_image = $this->upload->data('file_name');
        $location   = 'ppdb/';
		$pict       = $location.$data_image;
		
		//upload file
        $config['max_size']=10000;
        $config['allowed_types']="docx|doc|pdf";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'ppdb';

        $this->load->library('upload');
        $this->upload->initialize($config);
		
        //ambil data file
        $this->upload->do_upload('file_ppdb');
        $data_file = $this->upload->data('file_name');
        $location2   = 'ppdb/';
		$file       = $location2.$data_file;


        $data=array(
            'id_ppdb'=>$id_ppdb,
            'judul_ppdb'=>$judul_ppdb,
            'isi_ppdb'=>$isi_ppdb,
            'gambar_ppdb'=> $pict,
            'penulis_ppdb'=>$penulis_ppdb,
			'tgl_ppdb'=>$tgl_ppdb,
			'file_ppdb' => $file,
			);
			
        //simpan data 
        $this->admin_model->simpan('ppdb', $data);

        $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	</div>");
        redirect('admin/ppdb/ppdb');
    }

    function hapus_ppdb($kode = 0){
	    $result = $this->admin_model->Hapus('ppdb',array('id_ppdb' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/ppdb/ppdb');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_ppdb($kode = 0){
	    $row = $this->admin_model->edit_ppdb("where ppdb.`id_ppdb`  = '$kode'")->result_array();

	    $data = array(
			'id_ppdb' => $row[0]['id_ppdb'],
			'judul_ppdb' => $row[0]['judul_ppdb'],
			'isi_ppdb' => $row[0]['isi_ppdb'],
			'gambar_ppdb' => $row[0]['gambar_ppdb'],
			'penulis_ppdb' => $row[0]['penulis_ppdb'],
			'tgl_ppdb' => $row[0]['tgl_ppdb'],
			'file_ppdb' => $row[0]['file_ppdb'],
		);
		
	    $this->load->view('admin/ppdb/edit_ppdb', $data);
  	}

    function update_ppdb(){
		$tgl_ppdb =  date('Y-m-d');

		//upload gambar
		$id_ppdb = $this->input->post('id_ppdb');
		$config['max_size']=2048;
		$config['allowed_types']="jpg|jpeg|png";
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'ppdb';

		$this->load->library('upload');
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('gambar_ppdb')){
			$check_gambar = 'FALSE';
		}
		else{
			$check_gambar = 'TRUE';
		}
		$this->upload->do_upload('gambar_ppdb');
		$data_image = $this->upload->data('file_name');
		$location   = 'ppdb/';
		$pict       = $location.$data_image;
		

		//upload file
		$config['max_size']=2048;
		$config['allowed_types']="pdf";
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;
		$config['upload_path']=FCPATH.'ppdb';

		$this->load->library('upload');
		$this->upload->initialize($config);
		 //ambil data image
	
		 $this->upload->do_upload('file_ppdb');
		 $data_file = $this->upload->data('file_name');
		 $location2   = 'ppdb/';
		 $file       = $location2.$data_file;

		if(!$this->upload->do_upload('file_ppdb')){
			if($check_gambar == 'FALSE'){
				$data = array(
					'id_ppdb' => $this->input->post('id_ppdb'),
					'judul_ppdb' => $this->input->post('judul'),
					'isi_ppdb' => $this->input->post('isi'),
					'penulis_ppdb' => $this->input->post('penulis'),
					'tgl_ppdb' => $tgl_ppdb,
				);
			}
			else{
				$data = array(
					'id_ppdb' => $this->input->post('id_ppdb'),
					'judul_ppdb' => $this->input->post('judul'),
					'isi_ppdb' => $this->input->post('isi'),
					'penulis_ppdb' => $this->input->post('penulis'),
					'tgl_ppdb' => $tgl_ppdb,
					'gambar_ppdb' => $pict,
	
				  );
			}
		}
		else{
			$this->upload->do_upload('file_ppdb');
				$data_file = $this->upload->data('file_name');
				$location2   = 'ppdb/';
				$file       = $location2.$data_file;

			if(	$check_gambar == 'FALSE'){
				$data = array(
					'id_ppdb' => $this->input->post('id_ppdb'),
					'judul_ppdb' => $this->input->post('judul'),
					'isi_ppdb' => $this->input->post('isi'),
					'penulis_ppdb' => $this->input->post('penulis'),
					'tgl_ppdb' => $tgl_ppdb,
					'file_ppdb' => $file,
				);
			}
			else{
				$data = array(
					'id_ppdb' => $this->input->post('id_ppdb'),
					'judul_ppdb' => $this->input->post('judul'),
					'isi_ppdb' => $this->input->post('isi'),
					'penulis_ppdb' => $this->input->post('penulis'),
					'tgl_ppdb' => $tgl_ppdb,
					'gambar_ppdb' => $pict,
					'file_ppdb' => $file,
	
				  );
			}
		}
		

		
			  
		  //ganti file
		 
		$this->db->where('id_ppdb', $id_ppdb);
	    $res = $this->admin_model->update_ppdb($data);
	    if($res=1){
	      header('location:'.base_url().'admin/ppdb/ppdb');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}


	function profil(){
		$data = array('data_profil' => $this->admin_model->ambil_profil()->result_array(),);
		$this->load->view('admin/profil', $data);
	}

	function tambah_profil(){
		$this->load->view('admin/tambah_profil');
	}

	function detail_profil($kode = 0){
	    $row = $this->admin_model->edit_profil("where profil.`id_profil`  = '$kode'")->result_array();

	    $data = array(
	      'id_profil' => $row[0]['id_profil'],
	      'nama' => $row[0]['nama'],
	      'isi' => $row[0]['isi'],
	      'gambar' => $row[0]['gambar'],
	    );

	    $this->load->view('admin/detail_profil', $data);
  	}

  	function simpan_profil(){
        $id_profil  = '';
        $judul     = $this->input->post('judul');
        $isi     = $this->input->post('isi');

        //upload file
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'profil';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar');
        $data_image = $this->upload->data('file_name');
        $location   = 'profil/';
        $pict       = $location.$data_image;


        $data=array(
            'id_profil'=>$id_profil,
            'nama'=>$judul,
            'isi'=>$isi,
            'gambar'=> $pict
            );
        //simpan data 
        $this->admin_model->simpan('profil', $data);

        $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
        redirect('admin/profil');
    }

    function hapus_profil($kode = 0){
	    $result = $this->admin_model->Hapus('profil',array('id_profil' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/profil');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function edit_profil($kode = 0){
	    $row = $this->admin_model->edit_profil("where profil.`id_profil`  = '$kode'")->result_array();

	    $data = array(
	      'id_profil' => $row[0]['id_profil'],
	      'nama' => $row[0]['nama'],
	      'isi' => $row[0]['isi'],
	      'gambar' => $row[0]['gambar'],
	    );

	    $this->load->view('admin/edit_profil', $data);
  	}

  	function update_profil(){
  		$tanggal =  date('Y-m-d');

  		 //upload file
        $config['max_size']=2048;
        $config['allowed_types']="jpg|jpeg|png";
        $config['remove_spaces']=TRUE;
        $config['overwrite']=TRUE;
        $config['upload_path']=FCPATH.'profil';

        $this->load->library('upload');
        $this->upload->initialize($config);

        //ambil data image
        $this->upload->do_upload('gambar');
        $data_image = $this->upload->data('file_name');
        $location   = 'profil/';
        $pict       = $location.$data_image;

	    $data = array(
	      'id_profil' => $this->input->post('id_profil'),
	      'nama' => $this->input->post('judul'),
	      'isi' => $this->input->post('isi'),
	      'gambar' => $pict,
	      );

	    $res = $this->admin_model->update_profil($data);
	    if($res=1){
	      header('location:'.base_url().'admin/profil');
	      $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	    	</div>");
	    }
	}

	// function inbox(){
	// 	$data = array('data_pesan' => $this->Admin_model->ambil_inbox()->result_array(),);
	// 	$this->load->view('admin/dashboard', $data);
	//   }

	  // ************************************************************************************
    //                          guru
    // ************************************************************************************

	function inbox(){
		$data = array('data_inbox' => $this->admin_model->ambil_inbox()->result_array(),);
		$this->load->view('admin/inbox/inbox', $data);
	}

  	function hapus_inbox($kode = 0){
	    $result = $this->admin_model->Hapus('inbox',array('id_inbox' => $kode));
	    if($result == 1){
	      header('location:'.base_url().'admin/inbox');
	    $this->session->set_flashdata("sukses", "
	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	    	</div>");
		}
	}

	function detail_inbox($kode = 0){
	    $row = $this->admin_model->edit_inbox("where inbox.`id_inbox`  = '$kode'")->result_array();

	    $data = array(
	      'id_inbox' => $row[0]['id_inbox'],
	      'Email_pengirim' => $row[0]['Email_pengirim'],
	      'Nama_pengirim' => $row[0]['Nama_pengirim'],
	      'pesan' => $row[0]['pesan'],
	      'tgl_inbox' => $row[0]['tgl_inbox'],
	    );

	    $this->load->view('admin/inbox/detail_inbox', $data);
  	}

	  //inbox
	  function filter()
	  {
		  $data['tahun'] = $this->Admin_model->gettahun();
		  $this->load->view('admin/inbox/inbox', $data);
	  }

	  //chart
	  function chart()
	{
	  $data['hasil_chart']=$this->admin_model->Jum_inbox_tahun();
	  $this->load->view('admin/dashboard',$data);
	}


}