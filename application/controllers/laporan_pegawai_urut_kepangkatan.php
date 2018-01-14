<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_pegawai_urut_kepangkatan extends CI_Controller {

	/*
		***	Controller : laporan_pegawai_urut_kepangkatan.php
		***	by Gede Lumbung
		***	http://gedelumbung.com
	*/

	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$d['mst_golongan'] = $this->db->get('tbl_master_golongan');
				$d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
			
			if ($this->session->userdata('id_status_pegawai') == "" && $this->session->userdata('id_satuan_kerja') == "" && $this->session->userdata('id_lokasi_kerja') == "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "" ) {
				$d['data_pegawai'] = $this->db->query('SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan');
			} else {
				if ($this->session->userdata('id_status_pegawai') !== "" && $this->session->userdata('id_satuan_kerja') == "" && $this->session->userdata('id_lokasi_kerja') == "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai')."'");
				} elseif ($this->session->userdata('id_status_pegawai') == "" && $this->session->userdata('id_satuan_kerja') !== "" && $this->session->userdata('id_lokasi_kerja') == "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja')."'");
				} elseif ($this->session->userdata('id_status_pegawai') == "" && $this->session->userdata('id_satuan_kerja') == "" && $this->session->userdata('id_lokasi_kerja') !== "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja')."'");
				} elseif ($this->session->userdata('id_gol_awal') == "Semua" && $this->session->userdata('id_gol_akhir') == "Semua") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja')."' AND pegawai.id_golongan BETWEEN '".$this->session->userdata('id_gol_awal')."' AND '".$this->session->userdata('id_gol_akhir')."'");
				}
			}
			$this->load->view('dashboard_admin/laporan/urut_kepangkatan/home',$d);
			
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function export()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			
			if ($this->session->userdata('id_status_pegawai') == "" && $this->session->userdata('id_satuan_kerja') == "" && $this->session->userdata('id_lokasi_kerja') == "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "" ) {
				$d['data_pegawai'] = $this->db->query('SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan');
			} else {
				if ($this->session->userdata('id_status_pegawai') !== "" && $this->session->userdata('id_satuan_kerja') == "" && $this->session->userdata('id_lokasi_kerja') == "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai')."'");
				} elseif ($this->session->userdata('id_status_pegawai') == "" && $this->session->userdata('id_satuan_kerja') !== "" && $this->session->userdata('id_lokasi_kerja') == "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja')."'");
				} elseif ($this->session->userdata('id_status_pegawai') == "" && $this->session->userdata('id_satuan_kerja') == "" && $this->session->userdata('id_lokasi_kerja') !== "" && $this->session->userdata('id_gol_awal') == "" && $this->session->userdata('id_gol_akhir') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja')."'");
				} elseif ($this->session->userdata('id_gol_awal') == "Semua" && $this->session->userdata('id_gol_akhir') == "Semua") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia, golongan.golongan FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_golongan as golongan ON pegawai.id_golongan = golongan.id_golongan WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja')."' AND pegawai.id_golongan BETWEEN '".$this->session->userdata('id_gol_awal')."' AND '".$this->session->userdata('id_gol_akhir')."'");
				}
			}
			$this->load->view('dashboard_admin/laporan/urut_kepangkatan/home',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function set()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$sel_lap1['id_satuan_kerja'] = $this->input->post('id_satuan_kerja');
			$sel_lap1['id_gol_akhir'] = $this->input->post('id_gol_akhir');
			$sel_lap1['id_gol_awal'] = $this->input->post('id_gol_awal');
			$sel_lap1['id_status_pegawai'] = $this->input->post('id_status_pegawai');
			$sel_lap1['id_lokasi_kerja'] = $this->input->post('id_lokasi_kerja');
			$this->session->set_userdata($sel_lap1);
			header('location:'.base_url().'laporan_pegawai_urut_kepangkatan');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
}

/* End of file laporan_pegawai_urut_kepangkatan.php */
/* Location: ./application/controllers/laporan_pegawai_urut_kepangkatan.php */