<?php 
 
class Admin_model extends CI_Model{	

	public function ambil_galeri(){
		$query=$this->db->query("SELECT * FROM galeri ORDER BY id_galeri DESC");
		return $query;
	}

	public function ambil_inbox(){
		$query=$this->db->query("SELECT * FROM inbox ORDER BY id_inbox DESC");
		return $query;
	}

	public function editprofile($where= "") {
		$data = $this->db->query('SELECT * FROM admin '.$where);
		return $data;
	}

	public function editpassword($where= "") {
		$data = $this->db->query('SELECT * FROM admin '.$where);
		return $data;
	}

	public function simpan($table, $data){
		return $this->db->insert($table, $data);
	}

	public function simpan_mapel($table, $data){
		$table = $this->db->query("SELECT * from guru. mapel.`nama` as nama_mapel FROM guru JOIN mapel ON guru.`id_mapel` = mapel.`id_mapel` ");
		return $this->db->insert($table, $data);
	}

	public function check_mapel($data){
		$table = $this->db->query("SELECT * from mapel WHERE nama = '$data'");
		return $table->num_rows();
	}
	public function Hapus($table,$where){
		return $this->db->delete($table,$where);
	}

	public function edit_galeri($where= "") {
		$data = $this->db->query('SELECT * FROM galeri '.$where);
		return $data;
	}

	public function update_galeri($data){
        $this->db->where('id_galeri',$data['id_galeri']);
        $this->db->update('galeri',$data);
	}	
	
	public function delete_galeri($data){
		$this->db->where('id_galeri',$data['id_galeri']);
        $this->db->delete('galeri',$data);

	}

    public function ambil_ekstrakulikuler(){
		$query=$this->db->query("SELECT * FROM ekstrakulikuler");
		return $query;
	}

	public function edit_ekstrakulikuler($where= "") {
		$data = $this->db->query('SELECT * FROM ekstrakulikuler '.$where);
		return $data;
	}

	public function update_ekstrakulikuler($data){
        $this->db->where('id',$data['id']);
        $this->db->update('ekstrakulikuler',$data);
    }

    public function ambil_mapel(){
		$query=$this->db->query("SELECT * FROM mapel");
		return $query;
	}
	public function ambil_mapel_dipakai($data){
		$query=$this->db->query("SELECT id_mapel FROM guru WHERE id_mapel = $data");
		return $query->num_rows();
	}
	public function hapus_mapel(){
		$id = $_GET['id'];
		$query =$this->db->query('SELECT * FROM mapel WHERE id_mapel='.$id." ");
		$result = $db->query($query);
		}
	public function edit_mapel($where= "") {
		$data = $this->db->query('SELECT * FROM mapel '.$where);
		return $data;
	}

	public function update_mapel($data){
        $this->db->where('id_mapel',$data['id_mapel']);
        $this->db->update('mapel',$data);
	}
	// ************************************************************************************
    //                                 admin
    // ************************************************************************************
	public function update_profile($data){
        $this->db->where('id',$data['id']);
        $this->db->update('admin',$data);
	}

	public function update_password($data){
        $this->db->where('id',$data['id']);
        $this->db->update('admin',$data);
	}

	// ************************************************************************************
    //                                 admin
    // ************************************************************************************

    public function ambil_admin(){
		$nama = $this->session->userdata('nama');
		$this->db->query("SELECT * FROM admin WHERE username = '$nama'");
		return $this->db->get($this->table)->result();
	}
	
	public function ambil_profile_admin(){
		$nama = $this->session->userdata('nama');
		$query=$this->db->query("SELECT *FROM admin WHERE username = '$nama'");
		return $query;
	}


	// ************************************************************************************
    //                                 guru
    // ************************************************************************************

    public function ambil_guru(){
		$query=$this->db->query("SELECT guru.*, mapel.`nama` as nama_mapel FROM guru JOIN mapel ON guru.`id_mapel` = mapel.`id_mapel` ORDER BY id_guru DESC");
		return $query;
	}	

	public function edit_guru($where= "") {
		$data = $this->db->query("SELECT guru.*, mapel.`nama` as nama_mapel FROM guru JOIN mapel ON guru.`id_mapel` = mapel.`id_mapel`".$where);
		return $data;
	}

	public function update_guru($data){
        $this->db->where('id_guru',$data['id_guru']);
        $this->db->update('guru',$data);
    }

	// ************************************************************************************
    //                                 staff
    // ************************************************************************************

    public function ambil_staff(){
		$query=$this->db->query('SELECT * FROM staff ORDER BY id_staff DESC');
		return $query;
	}	

	public function edit_staff($where= "") {
		$data = $this->db->query('SELECT * FROM staff '.$where);
		return $data;
	}

	public function update_staff($data){
        $this->db->where('id_staff',$data['id_staff']);
        $this->db->update('staff',$data);
	}
	
	// ************************************************************************************
    //                                 pretasi
    // ************************************************************************************

    public function ambil_prestasi(){
		$query=$this->db->query('SELECT * FROM prestasi ORDER BY id_pres DESC');
		return $query;
	}	

	public function edit_prestasi($where= "") {
		$data = $this->db->query('SELECT * FROM prestasi '.$where);
		return $data;
	}

	public function update_prestasi($data){
        $this->db->where('id_pres',$data['id_pres']);
        $this->db->update('prestasi',$data);
	}


	// ************************************************************************************
    //                                 artikel
    // ************************************************************************************

	public function ambil_artikel(){
		$query=$this->db->query("SELECT * from artikel");
		return $query;
	}

	public function edit_artikel($where= "") {
		$data = $this->db->query('SELECT * FROM artikel '.$where);
		return $data;
	}

	public function update_artikel($data){
        $this->db->where('id_artikel',$data['id_artikel']);
        $this->db->update('artikel',$data);
	}
	
	// ************************************************************************************
    //                                 agenda
    // ************************************************************************************

	public function ambil_agenda(){
		$query=$this->db->query("SELECT * from agenda ORDER BY id_agenda DESC");
		return $query;
	}

	public function edit_agenda($where= "") {
		$data = $this->db->query('SELECT * FROM agenda '.$where);
		return $data;
	}

	public function update_agenda($data){
        $this->db->where('id_agenda',$data['id_agenda']);
        $this->db->update('agenda',$data);
	}

	public function simpan_agenda($table, $data){
		return $this->db->insert($table, $data);
	}
	

	// ************************************************************************************
    //                                berita
    // ************************************************************************************

	public function ambil_berita(){
		$query=$this->db->query('SELECT * FROM berita ORDER BY id_berita DESC');
		return $query;
	}

	public function edit_berita($where= "") {
		$data = $this->db->query('SELECT * FROM berita '.$where);
		return $data;
	}

	public function update_berita($data){
        $this->db->where('id_berita',$data['id_berita']);
        $this->db->update('berita',$data);
    }

	// ************************************************************************************
    //                                fasilitas
    // ************************************************************************************

	public function ambil_fasilitas(){
		$query=$this->db->query('SELECT * FROM fasilitas ORDER BY id_fasilitas DESC');
		return $query;
	}

	public function edit_fasilitas($where= "") {
		$data = $this->db->query('SELECT * FROM fasilitas '.$where);
		return $data;
	}

	public function update_fasilitas($data){
        $this->db->where('id_fasilitas',$data['id_fasilitas']);
        $this->db->update('fasilitas',$data);
    }

	
	// ************************************************************************************
    //                                struktur
    // ************************************************************************************

	public function ambil_struktur(){
		$query=$this->db->query('SELECT * FROM struktur');
		return $query;
	}

	public function edit_struktur($where= "") {
		$data = $this->db->query('SELECT * FROM struktur '.$where);
		return $data;
	}

	public function update_struktur($data){
        $this->db->where('id_struktur',$data['id_struktur']);
        $this->db->update('struktur',$data);
    }

	
	// ************************************************************************************
    //                                pengumuman
    // ************************************************************************************

	public function ambil_pengumuman(){
		$query=$this->db->query('SELECT * FROM pengumuman ORDER BY id_pengumuman DESC');
		return $query;
	}

	public function edit_pengumuman($where= "") {
		$data = $this->db->query('SELECT * FROM pengumuman '.$where);
		return $data;
	}

	public function update_pengumuman($data){
        $this->db->where('id_pengumuman',$data['id_pengumuman']);
        $this->db->update('pengumuman',$data);
	}
	
	

	// ************************************************************************************
    //                                ppdb
    // ************************************************************************************

	public function ambil_ppdb(){
		$query=$this->db->query('SELECT * FROM ppdb ORDER BY id_ppdb DESC');
		return $query;
	}

	public function edit_ppdb($where= "") {
		$data = $this->db->query('SELECT * FROM ppdb '.$where);
		return $data;
	}

	public function update_ppdb($data){
        $this->db->where('id_ppdb',$data['id_ppdb']);
        $this->db->update('ppdb',$data);
	}
	
	

    public function ambil_profil(){
		$query=$this->db->query("SELECT * from profil");
		return $query;
	}

	public function edit_profil($where= "") {
		$data = $this->db->query('SELECT * FROM profil '.$where);
		return $data;
	}

	public function update_profil($data){
        $this->db->where('id_profil',$data['id_profil']);
        $this->db->update('profil',$data);
    }

	public function edit_inbox($where= "") {
		$data = $this->db->query('SELECT * FROM inbox '.$where);
		return $data;
	}

	//inbox

	public function gettahun(){
		$query = $this->db->query("SELECT YEAR(tgl_inbox) AS tahun FROM inbox GROUP BY YEAR(tgl_inbox) ORDER BY YEAR(tgl_inbox) ASC");
		return $query -> result();
	
	}
	function filterbytanggal($tglawal, $tglakhir){
		$query = $this->db->query("SELECT * from inbox where tgl_inbox BETWEEN '$tglawal' and '$tglakhir' ORDER BY tgl_inbox ASC");
		return $query -> result();
		}
	
	function filterbybulan($tahun1, $bulanawal, $bulanakhir){
		$query = $this->db->query("SELECT * from inbox where YEAR(tgl_inbox) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' and '$bulanakhir' ORDER B tgl_inbox ASC" );
		return $query -> result();
		}
	
	function filterbytahun($tahun2){
		$query = $this->db->query("SELECT * from inbox where YEAR(tgl_inbox) = '$tahun1' ORDER BY tgl_inbox ASC" );
		return $query -> result();
		}

		//chart
	// function myChart($jan){
	// 	$jan = $this->db->query("SELECT COUNT(tgl_inbox) FROM `inbox` WHERE month(tgl_inbox) = 1");
	// 	return $jan -> result();
	// 	$feb = $this->db->query("SELECT COUNT(tgl_inbox) FROM `inbox` WHERE month(tgl_inbox) = 2");
	// 	return $feb -> result();
	// 	$mar = $this->db->query("SELECT COUNT(tgl_inbox) FROM `inbox` WHERE month(tgl_inbox) = 3");
	// 	return $mar -> result();
	// 	$apr = $this->db->query("SELECT COUNT(tgl_inbox) FROM `inbox` WHERE month(tgl_inbox) = 4");
	// 	return $apr -> result();
	// 	$mei = $this->db->query("SELECT COUNT(tgl_inbox) FROM `inbox` WHERE month(tgl_inbox) = 2");
	// 	return $mei -> result();
	// }

	//chart
	function myChart($bulanke){
		$query = $this->db->query("SELECT tgl_inbox FROM inbox WHERE month(tgl_inbox) = $bulanke");
		return $query -> num_rows();
	}

	

}