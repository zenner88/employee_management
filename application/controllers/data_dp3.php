<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_Dp3 extends CI_Controller {

	/*
		***	Controller : data_dp3.php
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
			$tot_hal = $this->db->get_where("tbl_data_dp3",$kode);
			$config['base_url'] = base_url() . 'data_dp3/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data'] = $this->db->get_where("tbl_data_dp3",$kode,$limit,$offset);
			
			$this->load->view('dashboard_admin/master/header',$d);
			$this->load->view('dashboard_admin/master/data_dp3/bg_home');
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
			$id['id_dp3'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_dp3",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_dp3;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['tahun'] = $dt->tahun; 
				$d['kesetiaan'] = $dt->kesetiaan; 
				$d['prestasi'] = $dt->prestasi; 
				$d['tanggung_jawab'] = $dt->tanggung_jawab; 
				$d['ketaatan'] = $dt->ketaatan; 
				$d['kejujuran'] = $dt->kejujuran; 
				$d['kerjasama'] = $dt->kerjasama; 
				$d['prakarsa'] = $dt->prakarsa; 
				$d['kepemimpinan'] = $dt->kepemimpinan; 
				$d['rata_rata'] = $dt->rata_rata; 
				$d['atasan'] = $dt->atasan; 
				$d['penilai'] = $dt->penilai; 
				$d['mengetahui'] = $dt->mengetahui;
				$d['foto'] = $dt->foto; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master/data_dp3/input',$d);
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
			$id['id_dp3'] = $this->uri->segment(3);
			$q = $this->db->get_where("tbl_data_dp3",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
				$d['id_param'] = $dt->id_dp3;
				$d['id_pegawai'] = $dt->id_pegawai; 
				$d['tahun'] = $dt->tahun; 
				$d['kesetiaan'] = $dt->kesetiaan; 
				$d['prestasi'] = $dt->prestasi; 
				$d['tanggung_jawab'] = $dt->tanggung_jawab; 
				$d['ketaatan'] = $dt->ketaatan; 
				$d['kejujuran'] = $dt->kejujuran; 
				$d['kerjasama'] = $dt->kerjasama; 
				$d['prakarsa'] = $dt->prakarsa; 
				$d['kepemimpinan'] = $dt->kepemimpinan; 
				$d['rata_rata'] = $dt->rata_rata; 
				$d['atasan'] = $dt->atasan; 
				$d['penilai'] = $dt->penilai; 
				$d['mengetahui'] = $dt->mengetahui;
				$d['foto'] = $dt->foto; 
			}
			$d['st'] = "edit";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master/data_dp3/detail',$d);
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
			$d['tahun'] = "";
			$d['kesetiaan'] = "";
			$d['prestasi'] = "";
			$d['tanggung_jawab'] = ""; 
			$d['ketaatan'] = "";
			$d['kejujuran'] = "";
			$d['kerjasama'] = "";
			$d['prakarsa'] = "";
			$d['kepemimpinan'] = "";
			$d['rata_rata'] = "";
			$d['atasan'] = "";
			$d['penilai'] = "";
			$d['mengetahui'] = "";
			$d['foto'] = "";
			$d['st'] = "tambah";
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			$this->load->view('dashboard_admin/master/data_dp3/input',$d);
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
			$id['id_dp3'] = $this->uri->segment(3);
			$this->db->delete("tbl_data_dp3",$id);
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
			$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required|is_natural');
			$this->form_validation->set_rules('kesetiaan', 'Kesetiaan', 'trim|required|is_natural');
			$this->form_validation->set_rules('prestasi', 'Prestasi', 'trim|required|is_natural');
			$this->form_validation->set_rules('tanggung_jawab', 'Tanggung Jawab', 'trim|required|is_natural');
			$this->form_validation->set_rules('ketaatan', 'Ketaatan', 'trim|required|is_natural');
			$this->form_validation->set_rules('kejujuran', 'Kejujuran', 'trim|required|is_natural');
			$this->form_validation->set_rules('kerjasama', 'Kerja Sama', 'trim|required|is_natural');
			$this->form_validation->set_rules('prakarsa', 'Prakarsa', 'trim|required|is_natural');
			$this->form_validation->set_rules('kepemimpinan', 'Kepemimpinan', 'trim|required|is_natural');
			$this->form_validation->set_rules('atasan', 'Atasan', 'trim|required');
			$this->form_validation->set_rules('penilai', 'Penilai', 'trim|required');
			$this->form_validation->set_rules('mengetahui', 'Mengetahui', 'trim|required');
			
			$id['id_dp3'] = $this->input->post("id_param");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_data_dp3",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_dp3;
						$d['id_pegawai'] = $dt->id_pegawai; 
						$d['tahun'] = $dt->tahun; 
						$d['kesetiaan'] = $dt->kesetiaan; 
						$d['prestasi'] = $dt->prestasi; 
						$d['tanggung_jawab'] = $dt->tanggung_jawab; 
						$d['ketaatan'] = $dt->ketaatan; 
						$d['kejujuran'] = $dt->kejujuran; 
						$d['kerjasama'] = $dt->kerjasama; 
						$d['prakarsa'] = $dt->prakarsa; 
						$d['kepemimpinan'] = $dt->kepemimpinan; 
						$d['rata_rata'] = $dt->rata_rata; 
						$d['atasan'] = $dt->atasan; 
						$d['penilai'] = $dt->penilai; 
						$d['mengetahui'] = $dt->mengetahui;
						$d['foto'] = $dt->foto; 
					}
					$d['st'] = $st;
			
					$this->load->view('dashboard_admin/master/data_dp3/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['id_pegawai'] = $this->session->userdata("kode_pegawai");
					$d['tahun'] = "";
					$d['kesetiaan'] = "";
					$d['prestasi'] = "";
					$d['tanggung_jawab'] = ""; 
					$d['ketaatan'] = "";
					$d['kejujuran'] = "";
					$d['kerjasama'] = "";
					$d['prakarsa'] = "";
					$d['kepemimpinan'] = "";
					$d['rata_rata'] = "";
					$d['atasan'] = "";
					$d['penilai'] = "";
					$d['mengetahui'] = "";
					$d['foto'] = "";
			
					$d['st'] = $st;
			
					$this->load->view('dashboard_admin/master/data_dp3/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['id_pegawai'] = $this->input->post("id_pegawai");
					$upd['tahun'] =  $this->input->post("tahun");
					
					$upd['kesetiaan'] =  $this->input->post("kesetiaan");
					$upd['prestasi'] =  $this->input->post("prestasi");
					$upd['tanggung_jawab'] =  $this->input->post("tanggung_jawab");
					$upd['ketaatan'] =  $this->input->post("ketaatan");
					$upd['kejujuran'] =  $this->input->post("kejujuran");
					$upd['kerjasama'] =  $this->input->post("kerjasama");
					$upd['prakarsa'] =  $this->input->post("prakarsa");
					$upd['kepemimpinan'] =  $this->input->post("kepemimpinan");
					$jum = ($upd['kesetiaan'] + $upd['prestasi'] + $upd['tanggung_jawab'] + $upd['ketaatan'] + $upd['kejujuran'] + $upd['kerjasama'] + $upd['prakarsa'] + $upd['kepemimpinan'])/8;
					$upd['rata_rata'] =  $jum;
					$upd['atasan'] =  $this->input->post("atasan");
					$upd['penilai'] =  $this->input->post("penilai");
					$upd['mengetahui'] =  $this->input->post("mengetahui");
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
						
						$config['upload_path']	= "./asset/foto_dp/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_dp/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_dp/thumb/" ;
							$destination_medium	= "./asset/foto_dp/medium/" ;
				 
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
					$this->db->update("tbl_data_dp3",$upd,$id);
					{
header("location:".base_url()."pegawai/edit/".$this->session->userdata("id_pegawai")."");
}
				}
				else if($st=="tambah")
				{
					$in['id_pegawai'] = $this->input->post("id_pegawai");
					$in['tahun'] =  $this->input->post("tahun");
					
					$in['kesetiaan'] =  $this->input->post("kesetiaan");
					$in['prestasi'] =  $this->input->post("prestasi");
					$in['tanggung_jawab'] =  $this->input->post("tanggung_jawab");
					$in['ketaatan'] =  $this->input->post("ketaatan");
					$in['kejujuran'] =  $this->input->post("kejujuran");
					$in['kerjasama'] =  $this->input->post("kerjasama");
					$in['prakarsa'] =  $this->input->post("prakarsa");
					$in['kepemimpinan'] =  $this->input->post("kepemimpinan");
					$jum = ($in['kesetiaan'] + $in['prestasi'] + $in['tanggung_jawab'] + $in['ketaatan'] + $in['kejujuran'] + $in['kerjasama'] + $in['prakarsa'] + $in['kepemimpinan'])/8;
					$in['rata_rata'] =  $jum;
					$in['atasan'] =  $this->input->post("atasan");
					$in['penilai'] =  $this->input->post("penilai");
					$in['mengetahui'] =  $this->input->post("mengetahui");
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
						
						$config['upload_path']	= "./asset/foto_dp/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '25000';
						$config['max_width']  	= '30000';
						$config['max_height']  	= '30000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_dp/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_dp/thumb/" ;
							$destination_medium	= "./asset/foto_dp/medium/" ;
				 
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
					$this->db->insert("tbl_data_dp3",$in);
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

/* End of file data_dp3.php */
/* Location: ./application/controllers/data_dp3.php */