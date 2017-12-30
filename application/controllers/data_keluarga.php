<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_Keluarga extends CI_Controller {

	/*
		***	Controller : data_keluarga.php
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
			
			$id['kode_pegawai'] = $this->uri->segment(3);
			$this->session->set_userdata($id);
			$kode['id_pegawai'] = $this->session->userdata('kode_pegawai');
			
			$page=$this->uri->segment(4);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->get_where("tbl_data_keluarga",$kode);
			$config['base_url'] = base_url() . 'data_keluarga/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_keluarga'] = $this->db->get_where("tbl_data_keluarga",$kode,$limit,$offset);
			
			$this->load->view('dashboard_admin/master/header',$d);
			$this->load->view('dashboard_admin/master/data_keluarga/bg_home');
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
			$id['id_data_keluarga'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_keluarga",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_data_keluarga;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['nama_anggota_keluarga'] = $dt->nama_anggota_keluarga; 
				$d['tanggal_lahir'] = date("Y-m-d", strtotime($dt->tanggal_lahir)); 
				$d['status_kawin'] = $dt->status_kawin; 
				$d['tanggal_nikah'] = date("Y-m-d", strtotime($dt->tanggal_nikah)); 
				$d['uraian'] = $dt->uraian; 
				if ($dt->tanggal_cerai_meninggal == "1970-01-01" ||  $d['tanggal_cerai_meninggal'] == "0000-00-00") {
				 	$d['tanggal_cerai_meninggal'] = '';
				} else {
					$d['tanggal_cerai_meninggal'] = date("Y-m-d", strtotime($dt->tanggal_cerai_meninggal));
				} 
				$d['pekerjaan'] = $dt->pekerjaan;
				$d['foto'] = $dt->pekerjaan;
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$this->load->view('dashboard_admin/master/data_keluarga/input',$d);
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
			$id['id_data_keluarga'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_keluarga",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_data_keluarga;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['nama_anggota_keluarga'] = $dt->nama_anggota_keluarga; 
				$d['tanggal_lahir'] = date("Y-m-d", strtotime($dt->tanggal_lahir)); 
				$d['status_kawin'] = $dt->status_kawin; 
				$d['tanggal_nikah'] = date("Y-m-d", strtotime($dt->tanggal_nikah)); 
				$d['uraian'] = $dt->uraian; 
				//$d['tanggal_cerai_meninggal'] = date("Y-m-d", strtotime($dt->tanggal_cerai_meninggal));
				if ($dt->tanggal_cerai_meninggal == "1970-01-01" ||  $d['tanggal_cerai_meninggal'] == "0000-00-00") {
				 	$d['tanggal_cerai_meninggal'] = '';
				} else {
					$d['tanggal_cerai_meninggal'] = date("Y-m-d", strtotime($dt->tanggal_cerai_meninggal));
				} 
				$d['pekerjaan'] = $dt->pekerjaan; 
				$d['foto'] = $dt->pekerjaan;
			}
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$d['st'] = "edit";
			
			$this->load->view('dashboard_admin/master/data_keluarga/detail',$d);
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
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$d['id_param'] = "";
			$d['id_pegawai'] = $this->session->userdata("id_pegawai");
			$d['nama_anggota_keluarga'] = "";
			$d['tanggal_lahir'] = "";
			$d['status_kawin'] = "";
			$d['tanggal_nikah'] = "";
			$d['uraian'] = "";
			$d['tanggal_cerai_meninggal'] = "";
			$d['pekerjaan'] = "";
			$d['foto'] = "";
			$d['st'] = "tambah";
			$this->load->view('dashboard_admin/master/data_keluarga/input',$d);
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
			$id['id_data_keluarga'] = $this->uri->segment(3);
			$this->db->delete("tbl_data_keluarga",$id);
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
			$this->form_validation->set_rules('nama_anggota_keluarga', 'Nama Anggota Keluarga', 'trim|required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
			$this->form_validation->set_rules('status_kawin', 'Status Kawin', 'trim|required');
			$this->form_validation->set_rules('tanggal_nikah', 'Tanggal Nikah', 'trim|required');
			$this->form_validation->set_rules('uraian', 'Uraian', 'trim|required');
			//$this->form_validation->set_rules('tanggal_cerai_meninggal', 'Tanggal Cerai/Meninggal', 'trim|required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
			
			$id['id_data_keluarga'] = $this->input->post("id_param");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_master_status_pegawai",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_data_keluarga;
						$d['id_pegawai'] = $dt->id_pegawai; 
						$d['nama_anggota_keluarga'] = $dt->nama_anggota_keluarga; 
						$d['tanggal_lahir'] = $dt->tanggal_lahir; 
						$d['status_kawin'] = $dt->status_kawin; 
						$d['tanggal_nikah'] = $dt->tanggal_nikah; 
						$d['uraian'] = $dt->uraian; 
						$d['tanggal_cerai_meninggal'] = $dt->tanggal_cerai_meninggal; 
						$d['pekerjaan'] = $dt->pekerjaan; 
						$d['foto'] = $dt->pekerjaan;
					}
					$d['st'] = $st;
					$this->load->view('dashboard_admin/master/data_keluarga/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['id_pegawai'] = $this->session->userdata("id_pegawai");
					$d['nama_anggota_keluarga'] = "";
					$d['tanggal_lahir'] = "";
					$d['status_kawin'] = "";
					$d['tanggal_nikah'] = "";
					$d['uraian'] = "";
					$d['tanggal_cerai_meninggal'] = "";
					$d['pekerjaan'] = "";
					$d['foto'] = "";
					$d['st'] = $st;
					$this->load->view('dashboard_admin/master/data_keluarga/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['id_pegawai'] = $this->input->post("id_pegawai");
					$upd['nama_anggota_keluarga'] = $this->input->post("nama_anggota_keluarga");
					$upd['tanggal_lahir'] = date("Y-m-d", strtotime($this->input->post("tanggal_lahir")));
					$upd['status_kawin'] = $this->input->post("status_kawin");
					$upd['tanggal_nikah'] = date("Y-m-d", strtotime($this->input->post("tanggal_nikah")));
					$upd['uraian'] = $this->input->post("uraian");
					$upd['tanggal_cerai_meninggal'] = date("Y-m-d", strtotime($this->input->post("tanggal_cerai_meninggal")));
					$upd['pekerjaan'] = $this->input->post("pekerjaan");
					if(!empty($_FILES['userfile']['name']))
					{
						$acak=rand(00000000000,99999999999);
						$bersih=$_FILES['userfile']['name'];
						$nm=str_replace(" ","_","$bersih");
						$pisah=explode(".",$nm);
						$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
						$nama_murni=date('Ymd-His');
						$ekstensi_kotor = $pisah[1];
						
						$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
						$file_type_baru = strtolower($file_type);
						
						$ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
						$n_baru = $ubah.'.'.$file_type_baru;
						
						$config['upload_path']	= "./asset/foto_penghargaan/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_penghargaan/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_penghargaan/thumb/" ;
							$destination_medium	= "./asset/foto_penghargaan/medium/" ;
				 
							// Permission Configuration
							chmod($source, 0777) ;
				 
							/* Resizing Processing */
							// Configuration Of Image Manipulation :: Static
							$this->load->library('image_lib') ;
							$img['image_library'] = 'GD2';
							$img['create_thumb']  = TRUE;
							$img['maintain_ratio']= TRUE;
				 
							/// Limit Width Resize
							$limit_medium   = 425 ;
							$limit_thumb    = 220 ;
				 
							// Size Image Limit was using (LIMIT TOP)
							$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
				 
							// Percentase Resize
							if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
								$percent_medium = $limit_medium/$limit_use ;
								$percent_thumb  = $limit_thumb/$limit_use ;
							}
				 
							//// Making THUMBNAIL ///////
							$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
							$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_thumb ;
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
				 
							////// Making MEDIUM /////////////
							$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
							$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_medium ;
							
							$upd['foto'] = $data['file_name'];
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
						}
					}
					$this->db->update("tbl_data_keluarga",$upd,$id);
					{
header("location:".base_url()."pegawai/edit/".$this->session->userdata("id_pegawai")."");
}
				}
				else if($st=="tambah")
				{
					$in['id_pegawai'] = $this->input->post("id_pegawai");
					$in['nama_anggota_keluarga'] = $this->input->post("nama_anggota_keluarga");
					$in['tanggal_lahir'] = date("Y-m-d", strtotime($this->input->post("tanggal_lahir")));
					$in['status_kawin'] = $this->input->post("status_kawin");
					$in['tanggal_nikah'] = date("Y-m-d", strtotime($this->input->post("tanggal_nikah")));
					$in['uraian'] = $this->input->post("uraian");
					$in['tanggal_cerai_meninggal'] = date("Y-m-d", strtotime($this->input->post("tanggal_cerai_meninggal")));
					$in['pekerjaan'] = $this->input->post("pekerjaan");
					if(!empty($_FILES['userfile']['name']))
					{
						$acak=rand(00000000000,99999999999);
						$bersih=$_FILES['userfile']['name'];
						$nm=str_replace(" ","_","$bersih");
						$pisah=explode(".",$nm);
						$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
						$nama_murni=date('Ymd-His');
						$ekstensi_kotor = $pisah[1];
						
						$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
						$file_type_baru = strtolower($file_type);
						
						$ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
						$n_baru = $ubah.'.'.$file_type_baru;
						
						$config['upload_path']	= "./asset/foto_keluarga/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_keluarga/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_keluarga/thumb/" ;
							$destination_medium	= "./asset/foto_keluarga/medium/" ;
				 
							// Permission Configuration
							chmod($source, 0777) ;
				 
							/* Resizing Processing */
							// Configuration Of Image Manipulation :: Static
							$this->load->library('image_lib') ;
							$img['image_library'] = 'GD2';
							$img['create_thumb']  = TRUE;
							$img['maintain_ratio']= TRUE;
				 
							/// Limit Width Resize
							$limit_medium   = 425 ;
							$limit_thumb    = 220 ;
				 
							// Size Image Limit was using (LIMIT TOP)
							$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
				 
							// Percentase Resize
							if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
								$percent_medium = $limit_medium/$limit_use ;
								$percent_thumb  = $limit_thumb/$limit_use ;
							}
				 
							//// Making THUMBNAIL ///////
							$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
							$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_thumb ;
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
				 
							////// Making MEDIUM /////////////
							$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
							$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_medium ;
							
							$in['foto'] = $data['file_name'];
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
						}
					}
					$this->db->insert("tbl_data_keluarga",$in);
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

/* End of file data_keluarga.php */
/* Location: ./application/controllers/data_keluarga.php */