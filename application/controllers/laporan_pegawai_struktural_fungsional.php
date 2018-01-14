<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_pegawai_struktural_fungsional extends CI_Controller {

	/*
		***	Controller : laporan_pegawai_struktural_fungsional.php
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
			
			$d['mst_status_jabatan'] = $this->db->get('tbl_master_status_jabatan');
				$d['mst_eselon'] = $this->db->get('tbl_master_golongan');
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
			if ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
				$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja");
			} else {
				if ($this->session->userdata('id_status_jabatan_fungsional') !== "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_status_jabatan = '".$this->session->userdata('id_status_jabatan_fungsional')."'");
				} elseif ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') !== "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_golongan = '".$this->session->userdata('id_eselon_fungsional')."'");
				} elseif ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') !== "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_fungsional')."'");
				} elseif ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') !== "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_fungsional')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_status_jabatan = '".$this->session->userdata('id_status_jabatan_fungsional')."' AND pegawai.id_golongan = '".$this->session->userdata('id_golongan')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_fungsional')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_fungsional')."'");
				}
			}
			$this->load->view('dashboard_admin/laporan/struktural_fungsional/home',$d);
			
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
			$d['mst_status_jabatan'] = $this->db->get('tbl_master_status_jabatan');
				$d['mst_eselon'] = $this->db->get('tbl_master_golongan');
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
			if ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
				$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja");
			} else {
				if ($this->session->userdata('id_status_jabatan_fungsional') !== "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_status_jabatan = '".$this->session->userdata('id_status_jabatan_fungsional')."'");
				} elseif ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') !== "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_golongan = '".$this->session->userdata('id_eselon_fungsional')."'");
				} elseif ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') !== "" && $this->session->userdata('id_lokasi_kerja_fungsional') == "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_fungsional')."'");
				} elseif ($this->session->userdata('id_status_jabatan_fungsional') == "" && $this->session->userdata('id_eselon_fungsional') == "" && $this->session->userdata('id_satuan_kerja_fungsional') == "" && $this->session->userdata('id_lokasi_kerja_fungsional') !== "") {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_fungsional')."'");
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT pegawai.nip, pegawai.nama_pegawai, pegawai.tempat_lahir, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.agama, pegawai.usia FROM tbl_data_pegawai as pegawai LEFT JOIN tbl_master_golongan ON pegawai.id_golongan = tbl_master_golongan.id_golongan LEFT JOIN tbl_master_status_jabatan ON pegawai.id_status_jabatan = tbl_master_status_jabatan.id_status_jabatan LEFT JOIN tbl_master_satuan_kerja ON pegawai.id_satuan_kerja = tbl_master_satuan_kerja.id_satuan_kerja LEFT JOIN tbl_master_lokasi_kerja ON pegawai.lokasi_kerja = tbl_master_lokasi_kerja.id_lokasi_kerja WHERE pegawai.id_status_jabatan = '".$this->session->userdata('id_status_jabatan_fungsional')."' AND pegawai.id_golongan = '".$this->session->userdata('id_golongan')."' AND pegawai.id_satuan_kerja = '".$this->session->userdata('id_satuan_kerja_fungsional')."' AND pegawai.lokasi_kerja = '".$this->session->userdata('id_lokasi_kerja_fungsional')."'");
				}
			}
			$this->load->view('dashboard_admin/laporan/struktural_fungsional/export',$d);
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
			$sel_lap1['id_satuan_kerja_fungsional'] = $this->input->post('id_satuan_kerja_fungsional');
			$sel_lap1['id_status_jabatan_fungsional'] = $this->input->post('id_status_jabatan_fungsional');
			$sel_lap1['id_eselon_fungsional'] = $this->input->post('id_eselon_fungsional');
			$sel_lap1['id_lokasi_kerja_fungsional'] = $this->input->post('id_lokasi_kerja_fungsional');
			$this->session->set_userdata($sel_lap1);
			header('location:'.base_url().'laporan_pegawai_struktural_fungsional');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
}

/* End of file laporan_pegawai_struktural_fungsional.php */
/* Location: ./application/controllers/laporan_pegawai_struktural_fungsional.php */