<?php 
 
class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');
		$this->load->library('pagination');
		$this->load->helper('tanggal');
		$this->load->library('form_validation');
	}

	// ************************************************************************************
    //                                 index
    // ************************************************************************************
 
	function index(){
		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}
		 
		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		 

		// $dpthasil = $this->user_model->ambil_galeri2();
		// if ($dpthasil)
		// {
		//     $data['hasil_galeri2'] = $dpthasil;
		// }
		// else{
		// 	$data['hasil_galeri2'] = "NULL";
		// }
		 
		$this->load->view('user/index', $data); 
	}

	
	// ************************************************************************************
    //                                 Guru
    // ************************************************************************************

	function guru(){
		$data = array('data_guru' => $this->user_model->ambil_guru()->result_array(),);

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}
		

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}

		$this->load->view('user/GuruStaff/guru', $data);
	}

	// ************************************************************************************
    //                                 Staff
	// ************************************************************************************
	
	function staff(){
		$data = array('data_staff' => $this->user_model->ambil_staff()->result_array(),);

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}

		$this->load->view('user/GuruStaff/staff', $data);
	}


	// ************************************************************************************
    //                                 prestasi
    // ************************************************************************************

	function prestasi(){
		$data = array('data_prestasi' => $this->user_model->ambil_prestasi()->result_array(),);
		
		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		$this->load->view('user/prestasi/prestasi', $data);
	}

	// ************************************************************************************
    //                                 mapel
    // ************************************************************************************

	function mata_pelajaran(){
		$data = array('data_mapel' => $this->admin_model->ambil_mapel()->result_array(),);
		$this->load->view('user/mata_pelajaran', $data);
	}

	// ************************************************************************************
    //                                 galeri
    // ************************************************************************************

	function galeri(){
		$dpthasil = $this->user_model->ambil_galeri();
		if ($dpthasil)
		{
		    $data['hasil_galeri'] = $dpthasil;
		}
		else{
			$data['hasil_galeri'] = "NULL";
		}

		$this->load->view('user/galeri', $data);
	}


	// ************************************************************************************
    //                                visi misi
    // ************************************************************************************

	function visimisi(){
		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		 
		$this->load->view('user/profil/visimisi', $data);

		
	}



	// ************************************************************************************
    //                                struktur organisasi
	// ************************************************************************************
	
	function struktur(){
		$cari = $this->user_model->ambil_struktur();
		if ($cari)
		{
		    $data['hasil_struktur'] = $cari;
		}
		else{
			$data['hasil_struktur'] = "NULL";
		}

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		 
		$this->load->view('user/profil/strukturorg', $data); 
	}


	// ************************************************************************************
    //                                Sejarah
    // ************************************************************************************

	function sejarah(){

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}

		
		$this->load->view('user/profil/sejarah',$data);

		
	}
	

	// ************************************************************************************
    //                                berita
    // ************************************************************************************

	function berita(){
		// $data['berita']= $this->user_model->berita_pagination(2, 1);
		//config
		$config['base_url'] = 'http://127.0.0.1/smpntigabms/user/berita/index';
		$config['total_rows'] = $this->user_model->countAllBerita();
		$config['per_page'] = 4;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);

		$cari = $this->user_model->ambil_berita_pagination($config['per_page'],$data['start']);
		if ($cari)
		{
		    $data['hasil_berita1'] = $cari;
		}
		else{
			$data['hasil_berita1'] = "NULL";
		}

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		$this->load->view('user/Berita&Acara/berita', $data); 
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

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}


	    $this->load->view('user/Berita&Acara/detail_berita', $data);
	  }

	// ************************************************************************************
    //                                Fasilitas
    // ************************************************************************************

	function fasilitas(){
		$cari = $this->user_model->ambil_fasilitas();
		if ($cari)
		{
		    $data['hasil_fasilitas'] = $cari;
		}
		else{
			$data['hasil_fasilitas'] = "NULL";
		}

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}
		
		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		$this->load->view('user/fasilitas/fasilitas', $data); 
	}

	
	// ************************************************************************************
    //                                agenda
    // ************************************************************************************

	function agenda(){
		$config['base_url'] = 'http://127.0.0.1/smpntigabms/user/agenda/index';
		$config['total_rows'] = $this->user_model->countAllAgenda();
		$config['per_page'] = 4;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);

		$cari = $this->user_model->ambil_agenda_pagination($config['per_page'],$data['start']);
		if ($cari)
		{
		    $data['hasil_agenda1'] = $cari;
		}
		else{
			$data['hasil_agenda1'] = "NULL";
		}

		//sidebar
		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		$this->load->view('user/Berita&Acara/agenda', $data); 
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

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}

		$this->load->view('user/Berita&Acara/detail_agenda', $data);
		}

	// ************************************************************************************
    //                                Pengumuman
    // ************************************************************************************

	function pengumuman(){
		$config['base_url'] = 'http://127.0.0.1/smpntigabms/user/pengumuman/index';
		$config['total_rows'] = $this->user_model->countAllPengumuman();
		$config['per_page'] = 4;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);

		$cari = $this->user_model->ambil_pengumuman_pagination($config['per_page'],$data['start']);
		if ($cari)
		{
		    $data['hasil_pengumuman1'] = $cari;
		}
		else{
			$data['hasil_pengumuman1'] = "NULL";
		}

		//sidebar

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}

		$this->load->view('user/pengumuman/pengumuman', $data); 

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

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}

		$this->load->view('user/pengumuman/detail_pengumuman', $data);
		}




  	function profil(){
		$cari = $this->user_model->ambil_profil();
		if ($cari)
		{
		    $data['hasil_profil'] = $cari;
		}
		else{
			$data['hasil_profil'] = "NULL";
		}
		 
		$this->load->view('user/profil', $data); 
	}

	function detail_profil($kode = 0){
	    $row = $this->admin_model->edit_profil("where profil.`id_profil`  = '$kode'")->result_array();

	    $data = array(
	      'id_profil' => $row[0]['id_profil'],
	      'nama' => $row[0]['nama'],
	      'isi' => $row[0]['isi'],
	      'gambar' => $row[0]['gambar'],
	    );

	    $this->load->view('user/detail_profil', $data);
  	}

	  // ************************************************************************************
    //                                PPDB
    // ************************************************************************************

	function ppdb(){
		$config['base_url'] = 'http://127.0.0.1/smpntigabms/user/ppdb/index';
		$config['total_rows'] = $this->user_model->countAllPpdb();
		$config['per_page'] = 4;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);

		$cari = $this->user_model->ambil_ppdb_pagination($config['per_page'],$data['start']);
		if ($cari)
		{
		    $data['hasil_ppdb1'] = $cari;
		}
		else{
			$data['hasil_ppdb1'] = "NULL";
		}

		//sidebar
		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}
		$this->load->view('user/ppdb/ppdb', $data); 
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

		$cari = $this->user_model->ambil_berita2();
		if ($cari)
		{
		    $data['hasil_berita'] = $cari;
		}
		else{
			$data['hasil_berita'] = "NULL";
		}

		$cari = $this->user_model->ambil_agenda2();
		if ($cari)
		{
		    $data['hasil_agenda'] = $cari;
		}
		else{
			$data['hasil_agenda'] = "NULL";
		}

		$cari = $this->user_model->ambil_pengumuman2();
		if ($cari)
		{
		    $data['hasil_pengumuman'] = $cari;
		}
		else{
			$data['hasil_pengumuman'] = "NULL";
		}


	    $this->load->view('user/ppdb/detail_ppdb', $data);
	  }


	  // contact
// 	function contact(){
		  
// 	function tambah_inbox(){
// 		$this->load->view('user/contact');
// 	}

// 	function simpan_inbox(){
// 	    $id_inbox	= '';
// 	    $Nama_pengirim= $_POST['name']; 
// 		$Email_pengirim= $_POST['email']; 
// 		$pesan= $_POST['pesan']; 
// 		$tgl_inbox =  date('Y-m-d');

// 	    $data = array(  
// 	      'id_inbox'=> $id_inbox,
// 	      'Nama_pengirim'=> $Nama_pengirim,
// 		  'Email_pengirim' => $Email_pengirim,
// 		  'pesan' =>$pesan,
// 		  'tgl_inbox' => $tgl_inbox,
// 	      );

// 	    $res = $this->user_model->simpan('inbox', $data);
// 		if($res=1){
// 	    $this->session->set_flashdata("sukses", "
// 	    	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Terima kasih telah mengirimkan pesan Kepada kami, Kami akan mengirimkan pesan balasan ke email yang telah anda masukkan 
// 	    	</div>");
// 			// redirect('user/contact');
// 		}
	
//   	}

// 	$this->load->view('user/contact');
// }

// ************************************************************************************
    //                                 inbox
    // ************************************************************************************

	function contact(){
		// $data = array('data_mapel' => $this->admin_model->ambil_mapel()->result_array(),);
		$this->load->view('user/contact');
	}

	function tambah_inbox(){
		$this->load->view('user/contact');
	}

	function simpan_inbox1(){
		$this->load->view('user/profil/visimisi');
	}
	function simpan_inbox(){
		// $this->load->helper('url');
		// $this->load->helper(array('form', 'url'));
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('name', 'Name', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');
		// $this->form_validation->set_rules('pesan', 'Pesan', 'required');
	
	    $id_inbox	= '';
	    $Nama_pengirim = $_POST['name']; 
		$Email_pengirim = $_POST['email']; 
		$pesan = $_POST['pesan']; 
		$tgl_inbox = date('Y-m-d');

	    $data = array(  
	      'id_inbox'=> $id_inbox,
	      'Nama_pengirim'=> $Nama_pengirim,
		  'Email_pengirim'=> $Email_pengirim,
		  'pesan'=> $pesan,
		  'tgl_inbox' => $tgl_inbox,
	      );

	    $res = $this->user_model->simpan('inbox', $data);
		
			// header('location:'.base_url().'user/contact');
			// $this->session->set_flashdata("sukses", "
	    	// <div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Ditambahkan
	    	// </div>");
			if ($res == 1){
				$this->session->set_flashdata("sukses", "
				<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Terima Kasih Telah Mengirimkan Pesan Kepada Kami, Kami akan membalas pesan melalui email yang telah Anda masukkan 
				</div>");
				redirect('user/contact');
			}
	    	
		
		
  	}

  	// function edit_mapel($kode = 0){
	//     $row = $this->admin_model->edit_mapel("where mapel.`id_mapel`  = '$kode'")->result_array();

	//     $data = array(
	//       'id_mapel' => $row[0]['id_mapel'],
	//       'nama' => $row[0]['nama'],
	//     );
	//     $this->load->view('admin/mapel/edit_mapel', $data);
  	// }

  	// function update_mapel(){
	//     $data = array(
	//       'id_mapel' => $this->input->post('id_mapel'),
	//       'nama' => $this->input->post('nama'),
	//       );

	//     $res = $this->admin_model->update_mapel($data);
	//     if($res=1){
	//       header('location:'.base_url().'admin/mapel/mapel');
	//       $this->session->set_flashdata("sukses", "
	//     	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Diedit
	//     	</div>");
	//     }
	// }

	// function hapus_mapel($kode = 0){
	//     $result = $this->admin_model->Hapus('mapel',array('id_mapel' => $kode));
	//     if($result == 1){
	//       header('location:'.base_url().'admin/mapel/mapel');
	//     $this->session->set_flashdata("sukses", "
	//     	<div class='alert alert-success alert-block'> <a class='close' data-dismiss='alert' href='#'>×</a> <h4 class='alert-heading'>Sukses!</h4> Data Berhasil Dihapus
	//     	</div>");
	// 	}
	// }
}