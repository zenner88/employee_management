<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_Hukuman extends CI_Controller {

	/*
		***	Controller : data_hukuman.php
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
			$tot_hal = $this->db->query("select * from tbl_data_hukuman a left join tbl_master_hukuman 
			b on a.id_master_hukuman=b.id_hukuman where a.id_pegawai='".$kode['id_pegawai']."'");
			$config['base_url'] = base_url() . 'data_hukuman/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data'] = $this->db->query("select a.id_hukuman, b.nama_hukuman, a.nomor_sk, a.tanggal_sk, a.tanggal_mulai
			, a.tanggal_selesai, a.masa_berlaku from tbl_data_hukuman a left join tbl_master_hukuman 
			b on a.id_master_hukuman=b.id_hukuman where a.id_pegawai='".$kode['id_pegawai']."' LIMIT ".$offset.",".$limit."");
			
			$this->load->view('dashboard_admin/master/header',$d);
			$this->load->view('dashboard_admin/master/data_hukuman/bg_home');
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
			$id['id_hukuman'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_hukuman",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_hukuman;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['id_master_hukuman'] = $dt->id_master_hukuman; 
				$d['nomor_sk'] = $dt->nomor_sk; 
				$d['tanggal_sk'] = $dt->tanggal_sk; 
				$d['uraian'] = $dt->uraian; 
				$d['tanggal_mulai'] = $dt->tanggal_mulai; 
				$d['tanggal_selesai'] = $dt->tanggal_selesai; 
				$d['masa_berlaku'] = $dt->masa_berlaku; 
				$d['pejabat_menetapkan'] = $dt->pejabat_menetapkan;
				$d['foto'] = $dt->foto; 
			}
			$d['st'] = "edit";
			$d['mst_hukuman'] = $this->db->get("tbl_master_hukuman");
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$this->load->view('dashboard_admin/master/data_hukuman/input',$d);
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
			$id['id_hukuman'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_hukuman",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_hukuman;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['id_master_hukuman'] = $dt->id_master_hukuman; 
				$d['nomor_sk'] = $dt->nomor_sk; 
				$d['tanggal_sk'] = $dt->tanggal_sk; 
				$d['uraian'] = $dt->uraian; 
				$d['tanggal_mulai'] = $dt->tanggal_mulai; 
				$d['tanggal_selesai'] = $dt->tanggal_selesai; 
				$d['masa_berlaku'] = $dt->masa_berlaku; 
				$d['pejabat_menetapkan'] = $dt->pejabat_menetapkan;
				$d['foto'] = $dt->foto; 
			}
			$d['st'] = "edit";
			$d['mst_hukuman'] = $this->db->get("tbl_master_hukuman");
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$this->load->view('dashboard_admin/master/data_hukuman/detail',$d);
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
			$d['id_master_hukuman'] = "";
			$d['nomor_sk'] = "";
			$d['tanggal_sk'] = "";
			$d['uraian'] = "";
			$d['tanggal_mulai'] = "";
			$d['tanggal_selesai'] = "";
			$d['masa_berlaku'] = "";
			$d['pejabat_menetapkan'] = "";
			$d['foto'] = "";
			$d['st'] = "tambah";
			$d['mst_hukuman'] = $this->db->get("tbl_master_hukuman");
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$this->load->view('dashboard_admin/master/data_hukuman/input',$d);
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
			$id['id_hukuman'] = $this->uri->segment(3);
			$this->db->delete("tbl_data_hukuman",$id);
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
			$this->form_validation->set_rules('id_master_hukuman', 'Hukuman', 'trim|required');
			$this->form_validation->set_rules('nomor_sk', 'Nomor SK', 'trim|required');
			$this->form_validation->set_rules('tanggal_sk', 'Tanggal SK', 'trim|required');
			$this->form_validation->set_rules('uraian', 'Uraian', 'trim|required');
			$this->form_validation->set_rules('tanggal_mulai', 'Tanggal Mulai', 'trim|required');
			$this->form_validation->set_rules('tanggal_selesai', 'Tanggal Selesai', 'trim|required');
			$this->form_validation->set_rules('masa_berlaku', 'Masa Berlaku', 'trim|required');
			$this->form_validation->set_rules('pejabat_menetapkan', 'Pejabat Menetapkan', 'trim|required');
			
			$id['id_hukuman'] = $this->input->post("id_param");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_data_hukuman",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_hukuman;
						$d['id_pegawai'] = $dt->id_pegawai; 
						$d['id_master_hukuman'] = $dt->id_master_hukuman; 
						$d['nomor_sk'] = $dt->nomor_sk; 
						$d['tanggal_sk'] = $dt->tanggal_sk; 
						$d['uraian'] = $dt->uraian; 
						$d['tanggal_mulai'] = $dt->tanggal_mulai; 
						$d['tanggal_selesai'] = $dt->tanggal_selesai; 
						$d['masa_berlaku'] = $dt->masa_berlaku; 
						$d['pejabat_menetapkan'] = $dt->pejabat_menetapkan;
						$d['foto'] = $dt->foto; 
					}
					$d['st'] = $st;
					$d['mst_hukuman'] = $this->db->get("tbl_master_hukuman");
			
					$this->load->view('dashboard_admin/master/data_hukuman/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['id_pegawai'] = $this->session->userdata("id_pegawai");
					$d['id_master_hukuman'] = "";
					$d['nomor_sk'] = "";
					$d['tanggal_sk'] = "";
					$d['uraian'] = "";
					$d['tanggal_mulai'] = "";
					$d['tanggal_selesai'] = "";
					$d['masa_berlaku'] = "";
					$d['pejabat_menetapkan'] = "";
					$d['foto'] = "";
					$d['st'] = $st;
					$d['mst_hukuman'] = $this->db->get("tbl_master_hukuman");
			
					$this->load->view('dashboard_admin/master/data_hukuman/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['id_pegawai'] = $this->input->post("id_pegawai");
					$upd['id_master_hukuman'] = $this->input->post("id_master_hukuman");
					$upd['nomor_sk'] = $this->input->post("nomor_sk");
					$upd['tanggal_sk'] = date("Y-m-d", strtotime($this->input->post("tanggal_sk")));
					$upd['uraian'] = $this->input->post("uraian");
					$upd['tanggal_mulai'] = date("Y-m-d", strtotime($this->input->post("tanggal_mulai")));
					$upd['tanggal_selesai'] = date("Y-m-d", strtotime($this->input->post("tanggal_selesai")));
					$upd['masa_berlaku'] = $this->input->post("masa_berlaku");
					$upd['pejabat_menetapkan'] = $this->input->post("pejabat_menetapkan");
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
						
						$config['upload_path']	= "./asset/foto_hukuman/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_hukuman/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_hukuman/thumb/" ;
							$destination_medium	= "./asset/foto_hukuman/medium/" ;
				 
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
					$this->db->update("tbl_data_hukuman",$upd,$id);
					{
header("location:".base_url()."pegawai/edit/".$this->session->userdata("id_pegawai")."");
}
				}
				else if($st=="tambah")
				{
					$in['id_pegawai'] = $this->input->post("id_pegawai");
					$in['id_master_hukuman'] = $this->input->post("id_master_hukuman");
					$in['nomor_sk'] = $this->input->post("nomor_sk");
					$in['tanggal_sk'] = date("Y-m-d", strtotime($this->input->post("tanggal_sk")));
					$in['uraian'] = $this->input->post("uraian");
					$in['tanggal_mulai'] = date("Y-m-d", strtotime($this->input->post("tanggal_mulai")));
					$in['tanggal_selesai'] = date("Y-m-d", strtotime($this->input->post("tanggal_selesai")));
					$in['masa_berlaku'] = $this->input->post("masa_berlaku");
					$in['pejabat_menetapkan'] = $this->input->post("pejabat_menetapkan");
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
						
						$config['upload_path']	= "./asset/foto_hukuman/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_hukuman/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_hukuman/thumb/" ;
							$destination_medium	= "./asset/foto_hukuman/medium/" ;
				 
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
					$this->db->insert("tbl_data_hukuman",$in);
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

/* End of file data_gaji_pokok.php */
/* Location: ./application/controllers/data_gaji_pokok.php */