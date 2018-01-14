<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_pegawai_status_golongan extends CI_Controller {

	/*
		***	Controller : laporan_pegawai_status_golongan.php
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
			
			if($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
				$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja");
			} else {
				if ($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') !== "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_golongan')."'");
				} elseif ($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') !== "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_golongan = '".$this->session->userdata('id_golongan_golongan')."'");
				} elseif ($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') !== "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_golongan')."'");
				} elseif ($this->session->userdata('id_status_pegawai_golongan') !== "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai_golongan')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai_golongan')."' AND pegawai.id_golongan = '".$this->session->userdata('id_golongan_golongan')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_golongan')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_golongan')."'");
				}
			}
			$this->load->view('dashboard_admin/laporan/status_golongan/home',$d);
			
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
			if($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
				$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja");
			} else {
				if ($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') !== "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_golongan')."'");
				} elseif ($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') !== "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_golongan = '".$this->session->userdata('id_golongan_golongan')."'");
				} elseif ($this->session->userdata('id_status_pegawai_golongan') == "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') !== "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_golongan')."'");
				} elseif ($this->session->userdata('id_status_pegawai_golongan') !== "" && $this->session->userdata('id_golongan_golongan') == "" && $this->session->userdata('id_satuan_kerja_golongan') == "" && $this->session->userdata('id_lokasi_kerja_golongan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai_golongan')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_pegawai ON pegawai.status_pegawai = tbl_master_status_pegawai.id_status_pegawai LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.status_pegawai = '".$this->session->userdata('id_status_pegawai_golongan')."' AND pegawai.id_golongan = '".$this->session->userdata('id_golongan_golongan')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_golongan')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_golongan')."'");
				}
			}
			$this->load->view('dashboard_admin/laporan/status_golongan/export',$d);
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
			$sel_lap1['id_satuan_kerja_golongan'] = $this->input->post('id_satuan_kerja_golongan');
			$sel_lap1['id_golongan_golongan'] = $this->input->post('id_golongan_golongan');
			$sel_lap1['id_status_pegawai_golongan'] = $this->input->post('id_status_pegawai_golongan');
			$sel_lap1['id_lokasi_kerja_golongan'] = $this->input->post('id_lokasi_kerja_golongan');
			$this->session->set_userdata($sel_lap1);
			header('location:'.base_url().'laporan_pegawai_status_golongan');
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

/* End of file laporan_pegawai_status_golongan.php */
/* Location: ./application/controllers/laporan_pegawai_status_golongan.php */