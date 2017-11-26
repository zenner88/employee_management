<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kenaikan_gaji extends CI_Controller {

	/*
		***	Controller : kenaikan_gaji.php
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
			
			
			if($this->session->userdata('id_satuan_kerja')=="Semua")
			{
				$d['data_pegawai'] = $this->db->query("SELECT 
				a.nip, a.nama_pegawai, b.nama_jabatan, c.uraian, c.golongan, d.golongan AS gol,d.uraian AS ura,
				f.tanggal_sk, SUBSTRING(tanggal_sk,-4), 
				LEFT(f.tanggal_sk, CHAR_LENGTH(tanggal_sk)-5)
				
				FROM tbl_data_pegawai a
				
				INNER JOIN tbl_data_gaji_pokok f ON a.id_pegawai	= f.id_pegawai
				INNER JOIN tbl_master_jabatan  b ON a.id_jabatan    = b.id_jabatan
				INNER JOIN tbl_master_golongan c ON a.id_golongan   = c.id_golongan
				INNER JOIN tbl_master_golongan d ON c.next   		= d.id_golongan
				
");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$this->load->view('dashboard_admin/laporan/kenaikan_gaji/home',$d);
			}
			else
			{
				$set_lap2['id_satuan_kerja'] = $this->session->userdata('id_satuan_kerja');
				$d['data_pegawai'] = $this->db->query("SELECT 
				a.nip, a.nama_pegawai, b.nama_jabatan, c.uraian, c.golongan, d.golongan AS gol,d.uraian AS ura,
				f.tanggal_sk, SUBSTRING(tanggal_sk,-4), 
				LEFT(f.tanggal_sk, CHAR_LENGTH(tanggal_sk)-5)
				
				FROM tbl_data_pegawai a
				
				INNER JOIN tbl_data_gaji_pokok f ON a.id_pegawai	= f.id_pegawai
				INNER JOIN tbl_master_jabatan  b ON a.id_jabatan    = b.id_jabatan
				INNER JOIN tbl_master_golongan c ON a.id_golongan   = c.id_golongan
				INNER JOIN tbl_master_golongan d ON c.next   		= d.id_golongan
				 where SUBSTRING(tanggal_sk,-4) ='".$set_lap2['id_satuan_kerja']."'");
				$d['mst_satuan_kerja'] = $this->db->get('tbl_master_satuan_kerja');
				$this->load->view('dashboard_admin/laporan/kenaikan_gaji/home',$d);
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
			
			if($this->session->userdata('id_satuan_kerja')=="Semua")
			{
				$d['data_pegawai'] = $this->db->query("SELECT 
				a.nip, a.nama_pegawai, b.nama_jabatan, c.uraian, c.golongan, d.golongan AS gol,d.uraian AS ura,
				f.tanggal_sk, SUBSTRING(tanggal_sk,-4), 
				LEFT(f.tanggal_sk, CHAR_LENGTH(tanggal_sk)-5)
				
				FROM tbl_data_pegawai a
				
				INNER JOIN tbl_data_gaji_pokok f ON a.id_pegawai	= f.id_pegawai
				INNER JOIN tbl_master_jabatan  b ON a.id_jabatan    = b.id_jabatan
				INNER JOIN tbl_master_golongan c ON a.id_golongan   = c.id_golongan
				INNER JOIN tbl_master_golongan d ON c.next   		= d.id_golongan
				");
				
				$this->load->view('dashboard_admin/laporan/kenaikan_gaji/export',$d);
			}
			else
			{
				$set_lap2['id_satuan_kerja'] = $this->session->userdata('id_satuan_kerja');
				$d['data_pegawai'] = $this->db->query("SELECT 
				a.nip, a.nama_pegawai, b.nama_jabatan, c.uraian, c.golongan, d.golongan AS gol,d.uraian AS ura,
				f.tanggal_sk, SUBSTRING(tanggal_sk,-4), 
				LEFT(f.tanggal_sk, CHAR_LENGTH(tanggal_sk)-5)
				
				FROM tbl_data_pegawai a
				
				INNER JOIN tbl_data_gaji_pokok f ON a.id_pegawai	= f.id_pegawai
				INNER JOIN tbl_master_jabatan  b ON a.id_jabatan    = b.id_jabatan
				INNER JOIN tbl_master_golongan c ON a.id_golongan   = c.id_golongan
				INNER JOIN tbl_master_golongan d ON c.next   		= d.id_golongan
				 where SUBSTRING(tanggal_sk,-4) ='".$set_lap2['id_satuan_kerja']."'");
				
				$this->load->view('dashboard_admin/laporan/kenaikan_gaji/export',$d);
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
			$this->session->set_userdata($sel_lap1);
			header('location:'.base_url().'kenaikan_gaji');
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

/* End of file kenaikan_gaji.php */
/* Location: ./application/controllers/kenaikan_gaji.php */