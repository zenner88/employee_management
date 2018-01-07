<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_Jenis_Pegawai extends CI_Controller {

	/*
		***	Controller : master_jenis_pegawai.php
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
			$tot_hal = $this->db->get("tbl_master_jenis_pegawai");
			$config['base_url'] = base_url() . 'master_jenis_pegawai/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['jenis_pegawai'] = $this->db->get("tbl_master_jenis_pegawai",$limit,$offset);
			
			$this->load->view('dashboard_admin/master_jenis_pegawai/home',$d);
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
			$id['id_jenis_pegawai'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_master_jenis_pegawai",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_jenis_pegawai;
				$d['nama_jenis_pegawai'] = $dt->nama_jenis_pegawai; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master_jenis_pegawai/input',$d);
		}
		else
		{
			header('location:'.base_url().'/master_jenis_pegawai');
		}
	}

	public function detail()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_jenis_pegawai'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_master_jenis_pegawai",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_jenis_pegawai;
				$d['nama_jenis_pegawai'] = $dt->nama_jenis_pegawai; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master_jenis_pegawai/detail',$d);
		}
		else
		{
			header('location:'.base_url().'/master_jenis_pegawai');
		}
	}

	public function tambah()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['id_param'] = "";
			$d['nama_jenis_pegawai'] = ""; 
			$d['st'] = "tambah";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master_jenis_pegawai/input',$d);
		}
		else
		{
			header('location:'.base_url().'/master_jenis_pegawai');
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
			$tot_hal = $this->db->query("select * from tbl_master_jenis_pegawai where nama_jenis_pegawai like '%".$kata."%'");
			$config['base_url'] = base_url() . 'master_jenis_pegawai/cari/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			$d['jenis_pegawai'] = $this->db->query("select * from tbl_master_jenis_pegawai where nama_jenis_pegawai like '%".$kata."%' LIMIT ".$offset.",".$limit."");
			$this->load->view('dashboard_admin/master_jenis_pegawai/home',$d);
		}
		else
		{
			header('location:'.base_url().'/master_jenis_pegawai');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_jenis_pegawai'] = $this->uri->segment(3);
			$this->db->delete("tbl_master_jenis_pegawai",$id);
			header('location:'.base_url().'master_jenis_pegawai');
		}
		else
		{
			header('location:'.base_url().'/master_jenis_pegawai');
		}
	}

	public function simpan()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$this->form_validation->set_rules('nama_jenis_pegawai', 'Nama Jenis Pegawai', 'trim|required');
			$id['id_jenis_pegawai'] = $this->input->post("id_param");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_master_jenis_pegawai",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_jenis_pegawai;
						$d['nama_jenis_pegawai'] = $dt->nama_jenis_pegawai; 
					}
					$d['st'] = $st;
					$this->load->view('dashboard_admin/master_jenis_pegawai/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['nama_jenis_pegawai'] = ""; 
					$d['st'] = $st;
					$this->load->view('dashboard_admin/master_jenis_pegawai/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['nama_jenis_pegawai'] = $this->input->post("nama_jenis_pegawai");
					$this->db->update("tbl_master_jenis_pegawai",$upd,$id);
					{
header('location:'.base_url().'/master_jenis_pegawai');
}
				}
				else if($st=="tambah")
				{
					$in['nama_jenis_pegawai'] = $this->input->post("nama_jenis_pegawai");
					$this->db->insert("tbl_master_jenis_pegawai",$in);
					{
header('location:'.base_url().'/master_jenis_pegawai');
}
				}
			
			}
		}
		else
		{
			header('location:'.base_url().'/master_jenis_pegawai');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
}

/* End of file master_jenis_pegawai.php */
/* Location: ./application/controllers/master_jenis_pegawai.php */