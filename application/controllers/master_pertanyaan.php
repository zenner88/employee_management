<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_Pertanyaan extends CI_Controller {

	/*
		***	Controller : master_pertanyaan.php
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
			
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->get("tbl_master_pertanyaan");
			$config['base_url'] = base_url() . 'master_pertanyaan/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['pertanyaan'] = $this->db->get("tbl_master_pertanyaan",$limit,$offset);
			
			$this->load->view('dashboard_admin/master_pertanyaan/home',$d);
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
			$id['id_pertanyaan'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_master_pertanyaan",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_pertanyaan;
				$d['nama_pertanyaan'] = $dt->nama_pertanyaan; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master_pertanyaan/input',$d);
		}
		else
		{
			header('location:'.base_url().'/master_pertanyaan');
		}
	}

	public function detail()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_pertanyaan'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_master_pertanyaan",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_pertanyaan;
				$d['nama_pertanyaan'] = $dt->nama_pertanyaan; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master_pertanyaan/detail',$d);
		}
		else
		{
			header('location:'.base_url().'/master_pertanyaan');
		}
	}

	public function tambah()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['id_param'] = "";
			$d['nama_pertanyaan'] = ""; 
			$d['st'] = "tambah";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master_pertanyaan/input',$d);
		}
		else
		{
			header('location:'.base_url().'/master_pertanyaan');
		}
	}

	public function cari()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			if($this->input->post("cari")=="")
			{
				$kata = $this->session->userdata('kata');
			}
			else
			{
				$sess_data['kata'] = $this->input->post("cari");
				$this->session->set_userdata($sess_data);
				$kata = $this->session->userdata('kata');
			}
			
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $page;
			$tot_hal = $this->db->query("select * from tbl_master_pertanyaan where nama_pertanyaan like '%".$kata."%'");
			$config['base_url'] = base_url() . 'master_pertanyaan/cari/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			$d['pertanyaan'] = $this->db->query("select * from tbl_master_pertanyaan where nama_pertanyaan like '%".$kata."%' LIMIT ".$offset.",".$limit."");
			$this->load->view('dashboard_admin/master_pertanyaan/home',$d);
		}
		else
		{
			header('location:'.base_url().'/master_pertanyaan');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_pertanyaan'] = $this->uri->segment(3);
			$this->db->delete("tbl_master_pertanyaan",$id);
			header('location:'.base_url().'master_pertanyaan');
		}
		else
		{
			header('location:'.base_url().'/master_pertanyaan');
		}
	}

	public function simpan()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$this->form_validation->set_rules('nama_pertanyaan', 'Nama Pertanyaan', 'trim|required');
			$id['id_pertanyaan'] = $this->input->post("id_param");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_master_pertanyaan",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_pertanyaan;
						$d['nama_pertanyaan'] = $dt->nama_pertanyaan; 
					}
					$d['st'] = $st;
					$this->load->view('dashboard_admin/master_pertanyaan/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['nama_pertanyaan'] = ""; 
					$d['st'] = $st;
					$this->load->view('dashboard_admin/master_pertanyaan/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['nama_pertanyaan'] = $this->input->post("nama_pertanyaan");
					$this->db->update("tbl_master_pertanyaan",$upd,$id);
					{
header('location:'.base_url().'/master_pertanyaan');
}
				}
				else if($st=="tambah")
				{
					$in['nama_pertanyaan'] = $this->input->post("nama_pertanyaan");
					$this->db->insert("tbl_master_pertanyaan",$in);
					{
header('location:'.base_url().'/master_pertanyaan');
}
				}
			
			}
		}
		else
		{
			header('location:'.base_url().'/master_pertanyaan');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
}

/* End of file master_pertanyaan.php */
/* Location: ./application/controllers/master_pertanyaan.php */