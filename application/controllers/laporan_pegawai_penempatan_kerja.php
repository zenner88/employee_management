<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_pegawai_penempatan_kerja extends CI_Controller {

	/*
		***	Controller : laporan_pegawai_penempatan_kerja.php
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
			$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
			$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
			if($this->session->userdata('id_satuan_kerja_penempatan') == "" && $this->session->userdata('id_lokasi_kerja_penempatan') == "")
			{
				$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_unit_kerja ON pegawai.id_unit_kerja = tbl_master_unit_kerja.id_unit_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja");
			}
			else
			{
				if ($this->session->userdata('id_satuan_kerja_penempatan') == "" && $this->session->userdata('id_lokasi_kerja_penempatan') !== "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_penempatan')."'");
				} else if($this->session->userdata('id_satuan_kerja_penempatan') !== "" && $this->session->userdata('id_lokasi_kerja_penempatan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_penempatan')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_penempatan')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_penempatan')."'");
				}
			
			}
			$this->load->view('dashboard_admin/laporan/penempatan_kerja/home',$d);
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
			$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
			$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
			if($this->session->userdata('id_satuan_kerja_penempatan') == "" && $this->session->userdata('id_lokasi_kerja_penempatan') == "")
			{
				$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_unit_kerja ON pegawai.id_unit_kerja = tbl_master_unit_kerja.id_unit_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja");
			}
			else
			{
				if ($this->session->userdata('id_satuan_kerja_penempatan') == "" && $this->session->userdata('id_lokasi_kerja_penempatan') !== "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_penempatan')."'");
				} else if($this->session->userdata('id_satuan_kerja_penempatan') !== "" && $this->session->userdata('id_lokasi_kerja_penempatan') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_penempatan')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_penempatan')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_penempatan')."'");
				}
			
			}
			$this->load->view('dashboard_admin/laporan/penempatan_kerja/export',$d);
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
			$sel_lap1['id_lokasi_kerja_penempatan'] = $this->input->post('id_lokasi_kerja_penempatan');
			$sel_lap1['id_satuan_kerja_penempatan'] = $this->input->post('id_satuan_kerja_penempatan');
			$this->session->set_userdata($sel_lap1);
			header('location:'.base_url().'laporan_pegawai_penempatan_kerja');
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

/* End of file laporan_pegawai_penempatan_kerja.php */
/* Location: ./application/controllers/laporan_pegawai_penempatan_kerja.php */