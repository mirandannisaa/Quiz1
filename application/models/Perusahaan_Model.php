<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getPerusahaan()
		{
			$query=$this->db->query("select * from perusahaan");
			return $query->result_array();
		}

		public function getProduk($id)
		{
			$sql="select A.namaPerusahaan, B.namaProduk, B.tanggalProduksi, B.tanggalKadaluarsa from perusahaan as A join produk as B on A.id = B.fk_perusahaan where A.id=$id";
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		public function getLokasi($id)
		{
			$sql="select A.namaPerusahaan, B.namaLokasi, B.tanggalBerdiri from perusahaan as A join lokasi as B on A.id = B.fk_perusahaan where A.id=$id";
			$query=$this->db->query($sql);
			return $query->result_array();
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>