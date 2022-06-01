<?php 
 
class User_model extends CI_Model{	

    
    // ************************************************************************************
    //                                 ambil_galeri
    // ************************************************************************************

    function ambil_galeri(){
        $sql2 = "select * FROM galeri";
        $dapat = $this->db->query($sql2);
        if($dapat->num_rows()>0)
        {
	        foreach ($dapat->result() as $barishasil)
	        {
	           $hasil_galeri[]=$barishasil;
	        }  
	        return $hasil_galeri;  
        }
    }

    function ambil_galeri2(){
        $sql2 = "select * FROM galeri";
        $dapat = $this->db->query($sql2);
        if($dapat->num_rows()>0)
        {
	        foreach ($dapat->result() as $barishasil)
	        {
	           $hasil_galeri2[]=$barishasil;
	        }  
	        return $hasil_galeri2;  
        }
    }

    // ************************************************************************************
    //                                 ambil_berita
    // ************************************************************************************
    // function berita_pagination($limit, $start){
    //     $sql1 = "select * FROM berita order by tgl_berita";
    //     $cari = $this->db->query($sql1);
    //     if($cari->num_rows()>0)
    //     {
    //         foreach
    //     }
    //  $this->db->get('berita', $limit, $start)->result_array();
    // }
    
    function ambil_berita_pagination($limit, $start){
        if($start == ""){
            $start = 0;
        }
        $sql1 = "select * FROM berita order by id_berita desc limit $start, $limit ";
        $cari = $this->db->query($sql1);
        
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
               $hasil_berita1[]=$baris;
	        }  
	        return $hasil_berita1;  
        }
    }

    function countAllBerita(){
        return $this->db->get('berita')->num_rows();
    }

    function ambil_berita2(){
        $sql1 = "select * FROM berita order by id_berita desc limit 3";
        $cari = $this->db->query($sql1);
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
               $hasil_berita[]=$baris;
	        }  
	        return $hasil_berita;  
        }
    }

    
    // ************************************************************************************
    //                                 ambil_fasilitas
    // ************************************************************************************

    function ambil_fasilitas(){
        $sql1 = "select * FROM fasilitas";
        $cari = $this->db->query($sql1);
       
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
               $hasil_fasilitas[]=$baris;
	        }  
	        return $hasil_fasilitas;  
        }
    }

    // ************************************************************************************
    //                                 ambil_agenda
    // ************************************************************************************

    function ambil_agenda_pagination($limit, $start){
        if($start == ""){
            $start = 0;
        }
        $sql1 = "select * FROM agenda order by id_agenda desc limit $start, $limit ";
        $cari = $this->db->query($sql1);
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
               $hasil_agenda1[]=$baris;
	        }  
	        return $hasil_agenda1;  
        }
    }

    function countAllAgenda(){
        return $this->db->get('agenda')->num_rows();
    }

    function ambil_agenda2(){
        $sql1 = "select * FROM agenda order by id_agenda desc limit 3";
        $cari = $this->db->query($sql1);
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
	           $hasil_agenda[]=$baris;
	        }  
	        return $hasil_agenda;  
        }
    }

    // ************************************************************************************
    //                                 ambil_pengumuman
    // ************************************************************************************

    function ambil_pengumuman_pagination($limit, $start){
        if($start == ""){
            $start = 0;
        }
        $sql1 = "select * FROM pengumuman order by id_pengumuman desc limit $start, $limit ";
        $cari = $this->db->query($sql1);
     
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
               $hasil_pengumuman1[]=$baris;
	        }  
	        return $hasil_pengumuman1;  
        }
    }

    function countAllPengumuman(){
        return $this->db->get('pengumuman')->num_rows();
    }

    function ambil_pengumuman2() {
        $sql1 = "select * FROM pengumuman order by id_pengumuman desc limit 3";
        $cari = $this->db->query($sql1);
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
	           $hasil_pengumuman[]=$baris;
	        }  
	        return $hasil_pengumuman;  
        }
    }

    // ************************************************************************************
    //                                 ambil_struktur
    // ************************************************************************************

    function ambil_struktur(){
        $sql1 = "select * FROM struktur";
        $cari = $this->db->query($sql1);
        // $hasil_struktur = array(); 
       
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
               $hasil_struktur[]=$baris;
	        }  
	        return $hasil_struktur;  
        }
    }

    // ************************************************************************************
    //                                 ambil_guru
    // ************************************************************************************

	function ambil_guru(){
		$query=$this->db->query("SELECT guru.*, mapel.`nama` as nama_mapel FROM guru JOIN mapel ON guru.`id_mapel` = mapel.`id_mapel`ORDER BY id_guru DESC");
		return $query;
    }
    
    // ************************************************************************************
    //                                 ambil_staff
    // ************************************************************************************

    function ambil_staff(){
        $query=$this->db->query("SELECT * from staff ORDER BY id_staff DESC");
        return $query;
    }

    // ************************************************************************************
    //                                 ambil_prestasi
    // ************************************************************************************

    function ambil_prestasi(){
        $query=$this->db->query("SELECT * from prestasi ORDER BY id_pres DESC");
        return $query;
    }

	function ambil_profil(){
        $sql1 = "select * FROM profil";
        $cari = $this->db->query($sql1);
        if($cari->num_rows()>0)
        {
            foreach($cari->result() as $baris)
            {
                $hasil_profil[]=$baris;
            }
            return $hasil_profil;
        }
    }

    // ************************************************************************************
    //                                 ambil_ppdb
    // ************************************************************************************
    // function berita_pagination($limit, $start){
    //     $sql1 = "select * FROM berita order by tgl_berita";
    //     $cari = $this->db->query($sql1);
    //     if($cari->num_rows()>0)
    //     {
    //         foreach
    //     }
    //  $this->db->get('berita', $limit, $start)->result_array();
    // }
    function ambil_ppdb_pagination($limit, $start){
        if($start == ""){
            $start = 0;
        }
        $sql1 = "select * FROM ppdb order by id_ppdb desc limit $start, $limit ";
        $cari = $this->db->query($sql1);
        $newpost = $this->db->order_by('tgl_ppdb','asc');
        if($cari->num_rows()>0)
        {
	        foreach ($cari->result() as $baris)
	        {
               $hasil_ppdb1[]=$baris;
	        }  
	        return $hasil_ppdb1;  
        }
    }

    function countAllPpdb(){
        return $this->db->get('ppdb')->num_rows();
    }

    //contact
    public function simpan($table, $data){
		return $this->db->insert($table, $data);
	} 

  
    

}
