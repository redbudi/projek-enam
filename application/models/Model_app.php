<?php class Model_app extends CI_Model{function __construct(){parent::__construct();date_default_timezone_set('Asia/Jakarta');}function addKode($param,$tabel,$kode){$q = $this->db->query("select MAX(RIGHT($param,7)) as kd_max from $tabel");$kd = "";if($q->num_rows()>0){foreach($q->result() as $k){$tmp = ((int)$k->kd_max)+1;$kd = sprintf("%07s", $tmp);}}else{$kd = "0000001";}return "$kode".$kd;} function tanggalIndonesia($tgl){ $a =explode("-",$tgl); $a =$a['2']."/".$a['1']."/".$a['0']; return $a;}function tanggalText($tgl){ $a =explode("-",$tgl); if ($a['1'] == 1) { $bln = "Januari"; }else if ($a['1'] == 2) { $bln = "Februari"; }else if ($a['1'] == 3) { $bln = "Maret"; }else if ($a['1'] == 4) { $bln = "April"; }else if ($a['1'] == 5) { $bln = "Mei"; }else if ($a['1'] == 6) { $bln = "Juni"; }else if ($a['1'] == 7) { $bln = "Juli"; }else if ($a['1'] == 8) { $bln = "Agustus"; }else if ($a['1'] == 9) { $bln = "September"; }else if ($a['1'] == 10) { $bln = "Oktober"; }else if ($a['1'] == 11) { $bln = "November"; }else if ($a['1'] == 12) { $bln = "Desember";}else{ $bln = "";} $a =$a['2']." ".$bln." ".$a['0']; return $a;}function tanggalPeriode($tgl){ $a =explode("-",$tgl); if ($a['0'] == 1) { $bln = "Januari"; }else if ($a['0'] == 2) { $bln = "Februari"; }else if ($a['0'] == 3) { $bln = "Maret"; }else if ($a['0'] == 4) { $bln = "April"; }else if ($a['0'] == 5) { $bln = "Mei"; }else if ($a['0'] == 6) { $bln = "Juni"; }else if ($a['0'] == 7) { $bln = "Juli"; }else if ($a['0'] == 8) { $bln = "Agustus"; }else if ($a['0'] == 9) { $bln = "September"; }else if ($a['0'] == 10) { $bln = "Oktober"; }else if ($a['0'] == 11) { $bln = "November"; }else if ($a['0'] == 12) { $bln = "Desember";}else{ $bln = "";} $a =$bln." ".$a['1']; return $a;}function tanggalGraph($tgl){ $a =explode("-",$tgl); if ($a['1'] == 1) { $bln = "Jan"; }else if ($a['1'] == 2) { $bln = "Feb"; }else if ($a['1'] == 3) { $bln = "Mar"; }else if ($a['1'] == 4) { $bln = "Apr"; }else if ($a['1'] == 5) { $bln = "Mei"; }else if ($a['1'] == 6) { $bln = "Jun"; }else if ($a['1'] == 7) { $bln = "Jul"; }else if ($a['1'] == 8) { $bln = "Agus"; }else if ($a['1'] == 9) { $bln = "Sept"; }else if ($a['1'] == 10) { $bln = "Okt"; }else if ($a['1'] == 11) { $bln = "Nov"; }else if ($a['1'] == 12) { $bln = "Des";}else{ $bln = "";} $a =$bln." ".$a['0']; return $a;}function tanggalGraph1($tgl){ $a =explode("-",$tgl); if ($a['1'] == 1) { $bln = "Januari"; }else if ($a['1'] == 2) { $bln = "Februari"; }else if ($a['1'] == 3) { $bln = "Maret"; }else if ($a['1'] == 4) { $bln = "April"; }else if ($a['1'] == 5) { $bln = "Mei"; }else if ($a['1'] == 6) { $bln = "Juni"; }else if ($a['1'] == 7) { $bln = "Juli"; }else if ($a['1'] == 8) { $bln = "Agustus"; }else if ($a['1'] == 9) { $bln = "September"; }else if ($a['1'] == 10) { $bln = "Oktober"; }else if ($a['1'] == 11) { $bln = "November"; }else if ($a['1'] == 12) { $bln = "Desember";}else{ $bln = "";} $a =$bln." ".$a['0']; return $a;}function tanggalHistori($tgljam){$a=explode(" ",$tgljam);$tgl=explode("-",$a['0']);$jam=explode(":",$a['1']);if($tgl['1']==1){$bln="Jan";}else if($tgl['1']==2){$bln="Feb";}else if($tgl['1']==3){$bln="Mar";}else if($tgl['1']==4){$bln="Apr";}else if($tgl['1']==5){$bln="Mei";}else if($tgl['1']==6){$bln="Jun";}else if($tgl['1']==7){$bln="Jul";}else if($tgl['1']==8){$bln="Agus";}else if($tgl['1']==9){$bln="Sept";}else if($tgl['1']==10){$bln="Okt";}else if($tgl['1']==11){$bln="Nov";}else if($tgl['1']==12){$bln="Des";}else{$bln="";}$a=$tgl['2']." ".$bln." ".$tgl['0']."|".$jam['0'].":".$jam['1'];return $a;}function rupiah($x){return number_format($x,'0','','.');} function tabelRupiah($x){return number_format($x,'0','',',');}function getAllData($tabel){return $this->db->get($tabel);}function getSelectedData($tabel,$param,$value){$this->db->where($param,$value);return $this->db->get($tabel);}function addData($tabel,$value){$this->db->insert($tabel,$value);return true;}function editData($tabel,$param,$value,$data){$this->db->where($param,$value);$this->db->set($data);$this->db->update($tabel);return true;}function deleteData($table,$parameter,$id){$this->db->where($parameter,$id);$this->db->delete($table);return true;}function tanggal($tgl){$a =explode("/",$tgl); if ($a['1'] == 1) { $bln = "Januari"; }else if ($a['1'] == 2) { $bln = "Februari"; }else if ($a['1'] == 3) { $bln = "Maret"; }else if ($a['1'] == 4) { $bln = "April"; }else if ($a['1'] == 5) { $bln = "Mei"; }else if ($a['1'] == 6) { $bln = "Juni"; }else if ($a['1'] == 7) { $bln = "Juli"; }else if ($a['1'] == 8) { $bln = "Agustus"; }else if ($a['1'] == 9) { $bln = "September"; }else if ($a['1'] == 10) { $bln = "Oktober"; }else if ($a['1'] == 11) { $bln = "November"; }else if ($a['1'] == 12) { $bln = "Desember";}else{ $bln = "";} $a=$a['0']." ".$bln." ".$a['2']; return $a;}function periode($tgl){ $a =explode("-",$tgl); if ($a['1'] == 1) { $bln = "Januari"; }else if ($a['1'] == 2) { $bln = "Februari"; }else if ($a['1'] == 3) { $bln = "Maret"; }else if ($a['1'] == 4) { $bln = "April"; }else if ($a['1'] == 5) { $bln = "Mei"; }else if ($a['1'] == 6) { $bln = "Juni"; }else if ($a['1'] == 7) { $bln = "Juli"; }else if ($a['1'] == 8) { $bln = "Agustus"; }else if ($a['1'] == 9) { $bln = "September"; }else if ($a['1'] == 10) { $bln = "Oktober"; }else if ($a['1'] == 11) { $bln = "November"; }else if ($a['1'] == 12) { $bln = "Desember";}else{ $bln = "";} $a =$bln." ".$a['0']; return $a;}

}?>