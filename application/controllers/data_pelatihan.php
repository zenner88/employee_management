<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_Pelatihan extends CI_Controller {

	/*
		***	Controller : data_pelatihan.php
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
			$tot_hal = $this->db->query("select b.nama_pelatihan, a.lokasi, a.tanggal_sertifikat, a.jam_pelatihan,
			a.negara, a.id_pelatihan from tbl_data_pelatihan a left join tbl_master_pelatihan 
			b on a.id_master_pelatihan=b.id_pelatihan where a.id_pegawai='".$kode['id_pegawai']."'");
			$config['base_url'] = base_url() . 'data_pelatihan/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data'] = $this->db->query("select b.nama_pelatihan, c.nama_lokasi, a.tanggal_sertifikat, a.jam_pelatihan,
			a.negara, a.id_pelatihan from tbl_data_pelatihan a left join tbl_master_pelatihan 
			b on a.id_master_pelatihan=b.id_pelatihan left join tbl_master_lokasi_pelatihan c on a.lokasi=c.id_lokasi_pelatihan where a.id_pegawai='".$kode['id_pegawai']."' LIMIT ".$offset.",".$limit."");
			
			$this->load->view('dashboard_admin/master/header',$d);
			$this->load->view('dashboard_admin/master/data_pelatihan/bg_home');
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
			$id['id_pelatihan'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_pelatihan",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_pelatihan;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['id_master_pelatihan'] = $dt->id_master_pelatihan; 
				$d['uraian'] = $dt->uraian; 
				$d['lokasi'] = $dt->lokasi; 
				$d['tanggal_sertifikat'] = $dt->tanggal_sertifikat; 
				$d['jam_pelatihan'] = $dt->jam_pelatihan; 
				$d['negara'] = $dt->negara; 
				$d['foto'] = $dt->foto; 				
			}
			$d['st'] = "edit";
			$d['mst_lokasi'] = $this->db->get("tbl_master_lokasi_pelatihan");
			$d['mst_pelatihan'] = $this->db->get("tbl_master_pelatihan");
			
			$this->load->view('dashboard_admin/master/data_pelatihan/input',$d);
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
			$id['id_pelatihan'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_pelatihan",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_pelatihan;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['id_master_pelatihan'] = $dt->id_master_pelatihan; 
				$d['uraian'] = $dt->uraian; 
				$d['lokasi'] = $dt->lokasi; 
				$d['tanggal_sertifikat'] = $dt->tanggal_sertifikat; 
				$d['jam_pelatihan'] = $dt->jam_pelatihan; 
				$d['negara'] = $dt->negara; 
				$d['foto'] = $dt->foto; 				
			}
			$d['st'] = "edit";
			$d['mst_lokasi'] = $this->db->get("tbl_master_lokasi_pelatihan");
			$d['mst_lokasi'] = $this->db->get("tbl_master_lokasi_pelatihan");
			$d['mst_pelatihan'] = $this->db->get("tbl_master_pelatihan");
			
			$this->load->view('dashboard_admin/master/data_pelatihan/detail',$d);
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
			$d['id_pegawai'] = $this->session->userdata("kode_pegawai");
			$d['id_master_pelatihan'] = "";
			$d['uraian'] = "";
			$d['lokasi'] = "";
			$d['tanggal_sertifikat'] = "";
			$d['jam_pelatihan'] = "";
			$d['negara'] = "";
			$d['foto'] = ""; 			
			
			$d['st'] = "tambah";
			$d['mst_pelatihan'] = $this->db->get("tbl_master_pelatihan");
			$d['mst_lokasi'] = $this->db->get("tbl_master_lokasi_pelatihan");
			
			$this->load->view('dashboard_admin/master/data_pelatihan/input',$d);
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
			$id['id_pelatihan'] = $this->uri->segment(3);
			$this->db->delete("tbl_data_pelatihan",$id);
			header('location:'.base_url().'data_pelatihan/index/'.$this->session->userdata("kode_pegawai").'');
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
			$this->form_validation->set_rules('id_master_pelatihan', 'Nama Pelatihan', 'trim|required');
			$this->form_validation->set_rules('uraian', 'Uraian', 'trim|required');
			$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
			$this->form_validation->set_rules('tanggal_sertifikat', 'Tanggal Sertifikat', 'trim|required');
			$this->form_validation->set_rules('jam_pelatihan', 'Jam Pelatihan', 'trim|required');
			$this->form_validation->set_rules('negara', 'Negara', 'trim|required');
			
			$id['id_pelatihan'] = $this->input->post("id_param");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_data_pelatihan",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_pelatihan;
						$d['id_pegawai'] = $dt->id_pegawai; 
						$d['id_master_pelatihan'] = $dt->id_master_pelatihan; 
						$d['uraian'] = $dt->uraian; 
						$d['lokasi'] = $dt->lokasi; 
						$d['tanggal_sertifikat'] = $dt->tanggal_sertifikat; 
						$d['jam_pelatihan'] = $dt->jam_pelatihan; 
						$d['negara'] = $dt->negara; 
						$d['foto'] = $dt->foto; 												
					}
					$d['st'] = $st;
					$d['mst_lokasi'] = $this->db->get("tbl_master_lokasi_pelatihan");
					$d['mst_pelatihan'] = $this->db->get("tbl_master_pelatihan");
					$this->load->view('dashboard_admin/master/data_pelatihan/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['id_pegawai'] = $this->session->userdata("kode_pegawai");
					$d['id_master_pelatihan'] = "";
					$d['uraian'] = "";
					$d['lokasi'] = "";
					$d['tanggal_sertifikat'] = "";
					$d['jam_pelatihan'] = "";
					$d['negara'] = "";
					$d['foto'] = ""; 											
			
					$d['st'] = "tambah";
					$d['mst_lokasi'] = $this->db->get("tbl_master_lokasi_pelatihan");
					$d['mst_pelatihan'] = $this->db->get("tbl_master_pelatihan");
			
					$this->load->view('dashboard_admin/master/data_pelatihan/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['id_pegawai'] = $this->input->post("id_pegawai");
					$upd['id_master_pelatihan'] = $this->input->post("id_master_pelatihan");
					$upd['uraian'] = $this->input->post("uraian");
					$upd['lokasi'] = $this->input->post("lokasi");
					$upd['tanggal_sertifikat'] = $this->input->post("tanggal_sertifikat");
					$upd['jam_pelatihan'] = $this->input->post("jam_pelatihan");
					$upd['negara'] = $this->input->post("negara");
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
						
						$config['upload_path']	= "./asset/foto_pelatihan/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_pelatihan/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_pelatihan/thumb/" ;
							$destination_medium	= "./asset/foto_pelatihan/medium/" ;
				 
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
					$this->db->update("tbl_data_pelatihan",$upd,$id);
					{
header('location:'.base_url().' ');
}
				}
				else if($st=="tambah")
				{
					$in['id_pegawai'] = $this->input->post("id_pegawai");
					$in['id_master_pelatihan'] = $this->input->post("id_master_pelatihan");
					$in['uraian'] = $this->input->post("uraian");
					$in['lokasi'] = $this->input->post("lokasi");
					$in['tanggal_sertifikat'] = $this->input->post("tanggal_sertifikat");
					$in['jam_pelatihan'] = $this->input->post("jam_pelatihan");
					$in['negara'] = $this->input->post("negara");

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
						
						$config['upload_path']	= "./asset/foto_pelatihan/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_pelatihan/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_pelatihan/thumb/" ;
							$destination_medium	= "./asset/foto_pelatihan/medium/" ;
				 
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
					$this->db->insert("tbl_data_pelatihan",$in);
					{
header('location:'.base_url().' ');
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

/* End of file data_pelatihan.php */
/* Location: ./application/controllers/data_pelatihan.php */