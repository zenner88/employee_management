<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_Atasan_Pekerjaan extends CI_Controller {

	/*
		***	Controller : data_atasan_pekerjaan.php
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
			
			$id['id_pegawai'] = $this->uri->segment(3);
			$this->session->set_userdata($id);
			$kode['id_pegawai'] = $this->session->userdata('id_pegawai');
			
			$page=$this->uri->segment(4);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->query("select * from tbl_data_atasan_pekerjaan a left join tbl_master_golongan b on a.id_golongan=b.id_golongan where a.id_pegawai='".$kode['id_pegawai']."'");
			$config['base_url'] = base_url() . 'data_atasan_pekerjaan/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data'] = $this->db->query("select * from tbl_data_atasan_pekerjaan a left join tbl_master_golongan b on a.id_golongan=b.id_golongan where a.id_pegawai='".$kode['id_pegawai']."' LIMIT ".$offset.",".$limit."");
			
			$this->load->view('dashboard_admin/master/header',$d);
			$this->load->view('dashboard_admin/master/data_atasan_pekerjaan/bg_home');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function edit()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_atasan_pekerjaan'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_atasan_pekerjaan",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_atasan_pekerjaan;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['nama_atasan_pekerjaan'] = $dt->nama_atasan_pekerjaan; 
				$d['jabatan_atasan_pekerjaan'] = $dt->jabatan_atasan_pekerjaan;
				$d['perusahaan_atasan_pekerjaan'] = $dt->perusahaan_atasan_pekerjaan;    
				$d['nomor_telepon_pekerjaan'] = $dt->nomor_telepon_pekerjaan; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$d['golongan'] = $this->db->get("tbl_master_golongan");
			
			$this->load->view('dashboard_admin/master/data_atasan_pekerjaan/input',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function detail()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_atasan_pekerjaan'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_atasan_pekerjaan",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_atasan_pekerjaan;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['nama_atasan_pekerjaan'] = $dt->nama_atasan_pekerjaan; 
				$d['jabatan_atasan_pekerjaan'] = $dt->jabatan_atasan_pekerjaan;  
				$d['perusahaan_atasan_pekerjaan'] = $dt->perusahaan_atasan_pekerjaan;  
				$d['nomor_telepon_pekerjaan'] = $dt->nomor_telepon_pekerjaan; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$d['golongan'] = $this->db->get("tbl_master_golongan");
			
			$this->load->view('dashboard_admin/master/data_atasan_pekerjaan/detail',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function tambah()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['id_param'] = "";
			$d['id_pegawai'] = $this->session->userdata("id_pegawai");
			
			$d['nama_atasan_pekerjaan'] = ""; 
			$d['jabatan_atasan_pekerjaan'] = "";  
			$d['perusahaan_atasan_pekerjaan'] = "";  
			$d['nomor_telepon_pekerjaan'] = "";
			$d['st'] = "tambah";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$d['golongan'] = $this->db->get("tbl_master_golongan");
			
			$this->load->view('dashboard_admin/master/data_atasan_pekerjaan/input',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_atasan_pekerjaan'] = $this->uri->segment(3);
			$this->db->delete("tbl_data_atasan_pekerjaan",$id);
			header("location:".base_url()."pegawai/edit/".$this->session->userdata("id_pegawai")."");
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function simpan()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$this->form_validation->set_rules('id_pegawai', 'Id Pegawai', 'trim|required');
			//$this->form_validation->set_rules('id_golongan', 'Golongan', 'trim|required');
			//$this->form_validation->set_rules('status', 'Status', 'trim|required');
			//$this->form_validation->set_rules('nomor_sk', 'Nomor SK', 'trim|required');
			//$this->form_validation->set_rules('tanggal_sk', 'Tanggal SK', 'trim|required');
			//$this->form_validation->set_rules('tanggal_mulai', 'Tanggal Mulai', 'trim|required');
			//$this->form_validation->set_rules('tanggal_selesai', 'Tanggal Selesai', 'trim|required');
			//$this->form_validation->set_rules('masa_kerja', 'Masa Kerja', 'trim|required');
			
			$id['id_atasan_pekerjaan'] = $this->input->post("id_param");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_data_atasan_pekerjaan",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_atasan_pekerjaan;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['nama_atasan_pekerjaan'] = $dt->nama_atasan_pekerjaan; 
				$d['jabatan_atasan_pekerjaan'] = $dt->jabatan_atasan_pekerjaan; 
				$d['perusahaan_atasan_pekerjaan'] = $dt->perusahaan_atasan_pekerjaan;   
				$d['nomor_telepon_pekerjaan'] = $dt->nomor_telepon_pekerjaan;
					}
					$d['st'] = $st;
					$d['golongan'] = $this->db->get("tbl_master_golongan");
					$this->load->view('dashboard_admin/master/data_atasan_pekerjaan/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['id_pegawai'] = $this->session->userdata("id_pegawai");
					$d['nama_atasan_pekerjaan'] = ""; 
			$d['jabatan_atasan_pekerjaan'] = "";  
			$d['perusahaan_atasan_pekerjaan'] = "";  
			$d['nomor_telepon_pekerjaan'] = "";
					$d['st'] = $st;
					$d['golongan'] = $this->db->get("tbl_master_golongan");
					$this->load->view('dashboard_admin/master/data_atasan_pekerjaan/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['id_pegawai'] = $this->input->post("id_pegawai");
					$upd['nama_atasan_pekerjaan'] = $this->input->post("nama_atasan_pekerjaan");
					$upd['jabatan_atasan_pekerjaan'] = $this->input->post("jabatan_atasan_pekerjaan");
					$upd['perusahaan_atasan_pekerjaan'] = $this->input->post("perusahaan_atasan_pekerjaan");
					$upd['nomor_telepon_pekerjaan'] = $this->input->post("nomor_telepon_pekerjaan");
					
					
					$this->db->update("tbl_data_atasan_pekerjaan",$upd,$id);
					{
header("location:".base_url()."pegawai/edit/".$this->session->userdata("id_pegawai")."");
}
				}
				else if($st=="tambah")
				{
					$in['id_pegawai'] = $this->input->post("id_pegawai");
					$in['nama_atasan_pekerjaan'] = $this->input->post("nama_atasan_pekerjaan");
					$in['jabatan_atasan_pekerjaan'] = $this->input->post("jabatan_atasan_pekerjaan");
					$in['perusahaan_atasan_pekerjaan'] = $this->input->post("perusahaan_atasan_pekerjaan");
					$in['nomor_telepon_pekerjaan'] = $this->input->post("nomor_telepon_pekerjaan");
					
					
					$this->db->insert("tbl_data_atasan_pekerjaan",$in);
					{
header("location:".base_url()."pegawai/edit/".$this->session->userdata("id_pegawai")."");
}
				}
			
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
}

/* End of file data_atasan_pekerjaan.php */
/* Location: ./application/controllers/data_atasan_pekerjaan.php */