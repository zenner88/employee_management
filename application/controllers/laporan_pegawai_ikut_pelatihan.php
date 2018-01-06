<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_pegawai_ikut_pelatihan extends CI_Controller {

	/*
		***	Controller : laporan_pegawai_ikut_pelatihan.php
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
			
			
			if($this->session->userdata('id_satuan_kerja')=="Semua" && $this->session->userdata('id_lokasi_kerja')=="Semua")
			{
				$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
			}
			else
			{
				$set_lap2['id_satuan_kerja'] = $this->session->userdata('id_satuan_kerja');
				$set_lap2['id_lokasi_kerja'] = $this->session->userdata('id_lokasi_kerja');
				if ($set_lap2['id_satuan_kerja'] == "Semua") {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.lokasi_kerja = '".$set_lap2['id_lokasi_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				//$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.lokasi_kerja = '".$set_lap2['id_lokasi_kerja']."' AND a.id_satuan_kerja = '".$set_lap2['id_satuan_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				//$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
				}
				if ($set_lap2['id_lokasi_kerja'] == "Semua") {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.id_satuan_kerja = '".$set_lap2['id_satuan_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				//$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.lokasi_kerja = '".$set_lap2['id_lokasi_kerja']."' AND a.id_satuan_kerja = '".$set_lap2['id_satuan_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				
				}
				
				$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
			}
			
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
			
			if($this->session->userdata('id_satuan_kerja')=="Semua" && $this->session->userdata('id_lokasi_kerja')=="Semua")
			{
				$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
			}
			else
			{
				$set_lap2['id_satuan_kerja'] = $this->session->userdata('id_satuan_kerja');
				$set_lap2['id_lokasi_kerja'] = $this->session->userdata('id_lokasi_kerja');
				if ($set_lap2['id_satuan_kerja'] == "Semua") {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.lokasi_kerja = '".$set_lap2['id_lokasi_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				//$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.lokasi_kerja = '".$set_lap2['id_lokasi_kerja']."' AND a.id_satuan_kerja = '".$set_lap2['id_satuan_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				//$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
				}
				if ($set_lap2['id_lokasi_kerja'] == "Semua") {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.id_satuan_kerja = '".$set_lap2['id_satuan_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				//$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
				} else {
					$d['data_pegawai'] = $this->db->query("SELECT a.id_pegawai, a.nip, a.nama_pegawai, pelatihan.uraian as nama_pelatihan, pelatihan.lokasi as lokasi_pelatihan, pelatihan.tanggal_sertifikat, pelatihan.jam_pelatihan FROM `tbl_data_pegawai` as a LEFT JOIN tbl_data_pelatihan as pelatihan ON a.id_pegawai = pelatihan.id_pegawai WHERE a.lokasi_kerja = '".$set_lap2['id_lokasi_kerja']."' AND a.id_satuan_kerja = '".$set_lap2['id_satuan_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$d['mst_lokasi_kerja'] = $this->db->get('tbl_master_lokasi_kerja');
				
				}
				
				$this->load->view('dashboard_admin/laporan/ikut_pelatihan/home',$d);
			}
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
			$sel_lap1['id_lokasi_kerja'] = $this->input->post('id_lokasi_kerja');
			$this->session->set_userdata($sel_lap1);
			header('location:'.base_url().'laporan_pegawai_ikut_pelatihan');
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

/* End of file laporan_pegawai_ikut_pelatihan.php */
/* Location: ./application/controllers/laporan_pegawai_ikut_pelatihan.php */