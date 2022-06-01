<?php 
 
class Inbox_model extends CI_Model{	

function gettahun(){
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

}