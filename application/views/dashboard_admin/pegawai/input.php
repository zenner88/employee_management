<?php include "application/views/dashboard_admin/home/header.php" ?>

<div class="container">
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3><?php echo $judul_lengkap.' '.$instansi; ?></h3>
		  <p><?php echo $alamat; ?></p>
		</div>
	  </div>
	</div>
	<?php if($st == "edit") { ?>
	<header class="jumbotron subhead" id="overview">
	  <div class="subnav">
		<ul class="nav nav-pills">
		  <li><a href="#data-pegawai">Pegawai</a></li>
		  <li><a href="#data-keluarga">Keluarga</a></li>
		  <li><a href="#data-pangkat">Riwayat Pangkat</a></li>
		  <li><a href="#data-jabatan">Riwayat Jabatan</a></li>
		  <li><a href="#data-pendidikan">Pendidikan</a></li>
		  <li><a href="#data-pelatihan">Pelatihan</a></li>
		  <li><a href="#data-penghargaan">Penghargaan</a></li>
		  <li><a href="#data-seminar">Seminar</a></li>
		  <li><a href="#data-organisasi">Organisasi</a></li>
		  <li><a href="#data-gaji">Gaji Pokok</a></li>
		  <li><a href="#data-hukuman">Hukuman</a></li>
		  <li><a href="#data-dp3">Penilaian</a></li>
		  <li><a href="#data-pekerjaan" class="line-menu">Riwayat Pekerjaan</a></li>
		  <li><a href="#data-atasan_pekerjaan" class="line-menu">Atasan Pekerjaan</a></li>
		  <li><a href="#data-kesehatan" class="line-menu">Riwayat Kesehatan</a></li>
		  <li><a href="#data-referensi" class="line-menu">Referensi</a></li>
		  <li><a href="#data-lain" class="line-menu">Lain - Lain</a></li>
		</ul>
	  </div>
	</header>
	<?php }?>
	<section id="data-pegawai">
		<div class="well">
			<div class="col-md-8">
				<div class="page-header">
    				<h1>Data Pegawai</h1>
  				</div>	
			</div>
			<?php if($st == "edit") { ?>
			<div class="col-md-4 pull-right">
				<a class="btn" href="<?php echo base_url(); ?>pegawai/detail/<?php echo $this->session->userdata('id_pegawai'); ?>"><i class="icon-ok-circle"></i> Export ke PDF</a>			
			</div>
      		<?php }?>
			<?php echo form_open_multipart('pegawai/simpan','class="form-horizontal"'); ?>
			<ul class="nav nav-tabs">
				<li class="nav-item"><a href="#dtpegawai" class="nav-link active" data-toggle="tab">Data Pegawai</a></li>
				<li class="nav-item"><a href="#dtpangkat" class="nav-link" data-toggle="tab">Data Pangkat</a></li>
				<li class="nav-item"><a href="#dtjabatan" class="nav-link" data-toggle="tab">Data Jabatan</a></li>
				<li class="nav-item"><a href="#dtfoto"  class="nav-link" data-toggle="tab">Foto Pegawai</a></li>
	  		</ul>
	  		<div id="myTabContent" class="tab-content">
		  		<div class="tab-pane fade in active" id="dtpegawai">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="card">
		                        <div class="card-block">
								<div class="control-group">
		                                <label class="control-label" for="nama_pegawai">Nama Pegawai</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?php echo set_value('nama_pegawai'); ?>" placeholder="Nama Pegawai">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?php echo $nama_pegawai; ?>" placeholder="Nama Pegawai">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                        
									<div class="control-group">
		                                <label class="control-label" for="nip">NIK</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="nip" id="nip" value="<?php echo set_value('nip'); ?>" placeholder="NIK">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="nip" id="nip" value="<?php echo $nip; ?>" placeholder="NIK">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="nip_lama">NIK Lama</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="nip_lama" id="nip_lama" value="<?php echo set_value('nip_lama'); ?>" placeholder="NIK Lama">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="nip_lama" id="nip_lama" value="<?php echo $nip_lama; ?>" placeholder="NIK Lama">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
									<div class="control-group">
		                                <label class="control-label" for="no_npwp">Nomor NPWP</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="no_npwp" id="no_npwp" value="<?php echo set_value('no_npwp'); ?>" placeholder="Nomor NPWP">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="no_npwp" id="no_npwp" value="<?php echo $no_npwp; ?>" placeholder="Nomor NPWP">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="no_KTP">Nomor KTP</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="no_KTP" id="no_KTP" value="<?php echo set_value('no_KTP'); ?>" placeholder="Nomor KTP">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="no_KTP" id="no_KTP" value="<?php echo $no_KTP; ?>" placeholder="Nomor KTP">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="no_KK">Nomor Kartu Keluarga</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="no_KK" id="no_KK" value="<?php echo set_value('no_KK'); ?>" placeholder="Nomor Kartu Keluarga">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="no_KK" id="no_KK" value="<?php echo $no_KK; ?>" placeholder="Nomor Kartu Keluarga">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="kartu_askes_pegawai">No BPJS</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="kartu_askes_pegawai" id="kartu_askes_pegawai" value="<?php echo set_value('kartu_askes_pegawai'); ?>" placeholder="No BPJS Pegawai">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="kartu_askes_pegawai" id="kartu_askes_pegawai" value="<?php echo $kartu_askes_pegawai; ?>" placeholder="No BPJS Pegawai">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            
		                            
		                            
		                            <div class="control-group">
		                                <label class="control-label" for="jenis_kelamin">Jenis Kelamin</label>
		                                <div class="controls">
		                                    <select data-placeholder="Jenis Kelamin" class="chzn-select" style="width:500px;" tabindex="2" name="jenis_kelamin" id="jenis_kelamin">
		                                        <?php
							$laki="";$perempuan="";$kosong1="";
							if($jenis_kelamin=="Laki-Laki"){ $laki='selected="selected"';$perempuan="";$kosong1=""; }
							else if($jenis_kelamin=="Perempuan"){ $laki='';$perempuan='selected="selected"';$kosong1=""; }
							else { $laki='';$perempuan='';$kosong1='selected="selected"'; }
							?>
		                                            <option value="" <?php echo $kosong1; ?>></option>
		                                            <option value="Laki-Laki" <?php echo $laki; ?>>Laki-Laki</option>
		                                            <option value="Perempuan" <?php echo $perempuan; ?>>Perempuan</option>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="agama">Agama</label>
		                                <div class="controls">
		                                    <select data-placeholder="Agama" class="chzn-select" style="width:500px;" tabindex="2" name="agama" id="agama">
		                                        <?php
							$islam="";$hindu="";$budha="";$protestan="";$katolik="";$konghucu="";$lainnya="";$kosong="";$kristen="";
							if($agama==""){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong='selected="selected"';$kristen=""; }
							else if($agama=="Hindu"){ $islam='';$hindu='selected="selected"';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
							else if($agama=="Budha"){ $islam='';$hindu='';$budha='selected="selected"';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
							else if($agama=="Kristen"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong="";$kristen='selected="selected"'; }
							else if($agama=="Kristen Protestan"){ $islam='';$hindu='';$budha='';$protestan='selected="selected"';$katolik='';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
							else if($agama=="Kristen Katolik"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='selected="selected"';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
							else if($agama=="Konghucu"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='selected="selected"';$lainnya='';$kristen="";$kosong=""; }
							else if($agama=="Lainnya"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='selected="selected"';$kristen="";$kosong=""; }
							else if($agama=="Islam"){ $islam='selected="selected"';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
							?>
		                                            <option value="" <?php echo $kosong; ?>></option>
		                                            <option value="Islam" <?php echo $islam; ?>>Islam</option>
		                                            <option value="Hindu" <?php echo $hindu; ?>>Hindu</option>
		                                            <option value="Budha" <?php echo $budha; ?>>Budha</option>
		                                            <option value="Kristen" <?php echo $kristen; ?>>Kristen</option>
		                                            <option value="Kristen Protestan" <?php echo $protestan; ?>>Kristen Protestan</option>
		                                            <option value="Kristen Katolik" <?php echo $katolik; ?>>Kristen Katolik</option>
		                                            <option value="Konghucu" <?php echo $konghucu; ?>>Konghucu</option>
		                                            <option value="Lainnya" <?php echo $lainnya; ?>>Lainnya</option>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="status_pegawai">Status Pegawai</label>
		                                <div class="controls">
		                                    <select data-placeholder="Status Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="status_pegawai" id="status_pegawai">
		                                        <option value=""></option>
		                                        <?php
								foreach($mst_status_pegawai->result_array() as $sp)
								{
									if($sp['id_status_pegawai']==$status_pegawai)
									{
							?>
		                                            <option value="<?php echo $sp['id_status_pegawai']; ?>" selected="selected">
		                                                <?php echo $sp['nama_status']; ?>
		                                            </option>
		                                            <?php
									}
									else
									{
							?>
		                                            <option value="<?php echo $sp['id_status_pegawai']; ?>">
		                                                <?php echo $sp['nama_status']; ?>
		                                            </option>
		                                            <?php
									}
								}
							?>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>" placeholder="Tempat Lahir">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            
		                            
		                            <div class="control-group">
		                                <label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
					 <div class='input-group date' id="datetimepicker2">
            <input type='text' class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="" placeholder="Tanggal Lahir" style="width: 99%" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
		                                    <!-- <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control datepicker" name="tanggal_lahir" id="tanggal_lahir" value="<?php //echo set_value('tanggal_lahir'); ?>" placeholder="Tanggal Lahir" onblur="getValue(this)">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div> -->
		                                    <?php
					}
					else
					{
					?>
					<div class='input-group date' id="datetimepicker2">
            <input type='text' class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir" style="width: 99%"/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
		                                    
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		 
		                            <div class="control-group">
		                                <label class="control-label" for="usia">Usia</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="usia" id="usia" value="<?php echo set_value('usia'); ?>" placeholder="Usia">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="usia" id="usia" value="<?php echo $usia; ?>" placeholder="Usia">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="tanggal_pengangkatan_cpns">Tanggal Pengangkatan Pegawai</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>

		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control" name="tanggal_pengangkatan_cpns" id="tanggal_pengangkatan_cpns" value="<?php echo set_value('tanggal_pengangkatan_cpns'); ?>" placeholder="Tanggal Pengangkatan Capeg" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					else
					{
					?>
		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control" name="tanggal_pengangkatan_cpns" id="tanggal_pengangkatan_cpns" value="<?php echo $tanggal_pengangkatan_cpns; ?>" placeholder="Tanggal Pengangkatan PEGAWAI" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="alamat">Alamat</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <textarea class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder="Alamat"><?php echo set_value('alamat'); ?></textarea>
		                                    <?php
					}
					else
					{
					?>
		                                    <textarea class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat_pegawai; ?></textarea>
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		  		<div class="tab-pane fade" id="dtpangkat">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="card">
		                        <div class="card-block">
		                            <div class="control-group">
		                                <label class="control-label" for="nip">Status Pegawai</label>
		                                <div class="controls">
		                                    <select data-placeholder="Status Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="status_pegawai_pangkat" id="status_pegawai_pangkat">
		                                        <option value=""></option>
		                                        <option value=""></option>
		                                        <?php
					  		foreach($mst_status_pegawai->result_array() as $msp)
					  		{
					  			if($status_pegawai_pangkat==$msp['id_status_pegawai'])
					  			{
					  	?>
		                                            <option value="<?php echo $msp['id_status_pegawai']; ?>" selected="selected">
		                                                <?php echo $msp['nama_status']; ?>
		                                            </option>
		                                            <?php
					  			}
					  			else
					  			{
					  	?>
		                                                <option value="<?php echo $msp['id_status_pegawai']; ?>">
		                                                    <?php echo $msp['nama_status']; ?>
		                                                </option>
		                                                <?php
					  			}
					  		}
					  	?>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="nip">Golongan</label>
		                                <div class="controls">
		                                    <select data-placeholder="Golongan" class="chzn-select" style="width:500px;" tabindex="2" name="id_golongan" id="id_golongan">
		                                        <option value=""></option>
		                                        <?php
					  		foreach($mst_golongan->result_array() as $mg)
					  		{
					  			if($id_golongan==$mg['id_golongan'])
					  			{
					  	?>
		                                            <option value="<?php echo $mg['id_golongan']; ?>" selected="selected">
		                                                <?php echo $mg['golongan']; ?>
		                                            </option>
		                                            <?php
					  			}
					  			else
					  			{
					  	?>
		                                                <option value="<?php echo $mg['id_golongan']; ?>">
		                                                    <?php echo $mg['golongan']; ?>
		                                                </option>
		                                                <?php
					  			}
					  		}
					  	?>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="nip">Nomor SK</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <input type="text" class="span6" name="nomor_sk_pangkat" id="nomor_sk_pangkat" value="<?php echo set_value('nomor_sk_pangkat'); ?>" placeholder="Nomor SK Pangkat">
		                                    <?php
					}
					else
					{
					?>
		                                    <input type="text" class="span6" name="nomor_sk_pangkat" id="nomor_sk_pangkat" value="<?php echo $nomor_sk_pangkat; ?>" placeholder="Nomor SK Pangkat">
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="nip">Tanggal SK</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control" name="tanggal_sk_pangkat" id="tanggal_sk_pangkat" value="<?php echo set_value('tanggal_sk_pangkat'); ?>" placeholder="Tanggal SK Pangkat" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					else
					{
					?>
		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control" name="tanggal_sk_pangkat" id="tanggal_sk_pangkat" value="<?php echo $tanggal_sk_pangkat; ?>" placeholder="Tanggal SK Pangkat" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="nip">Tanggal Mulai</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control" name="tanggal_mulai_pangkat" id="tanggal_mulai_pangkat" value="<?php echo set_value('tanggal_mulai_pangkat'); ?>" placeholder="Tanggal Mulai Pangkat" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					else
					{
					?>
		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control" name="tanggal_mulai_pangkat" id="tanggal_mulai_pangkat" value="<?php echo $tanggal_mulai_pangkat; ?>" placeholder="Tanggal Mulai Pangkat" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                            <div class="control-group">
		                                <label class="control-label" for="nip">Tanggal Selesai</label>
		                                <div class="controls">
		                                    <?php
					if($st=="tambah")
					{
					?>
		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="form-control" name="tanggal_selesai_pangkat" id="tanggal_selesai_pangkat" value="<?php echo set_value('tanggal_selesai_pangkat'); ?>" placeholder="Tanggal Selesai Pangkat" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					else
					{
					?>
		                                    <div class="input-group date" data-provide="datepicker">
		                                        <input type="text" class="span6" name="tanggal_selesai_pangkat" id="tanggal_selesai_pangkat" value="<?php echo $tanggal_selesai_pangkat; ?>" placeholder="Tanggal Selesai Pangkat" style="width: 99%">
		                                        <div class="input-group-addon">
		                                            <span class="glyphicon glyphicon-th"></span>
		                                        </div>
		                                    </div>
		                                    <?php
					}
					?>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		  		<div class="tab-pane fade" id="dtjabatan">
		            <div class="row">
		            	<div class="col-sm-12">
		            		<div class="card">
		            			<div class="card-block">
		            			<div class="control-group">
	                                <label class="control-label" for="nip">Lokasi Kerja</label>
	                                <div class="controls">
	                                    <select data-placeholder="Lokasi Kerja" class="chzn-select" style="width:500px;" tabindex="2" name="lokasi_kerja" id="lokasi_kerja">
	                                        <option value=""></option>
	                                        <?php
				  		foreach($mst_lokasi_kerja->result_array() as $me)
				  		{
				  			if($lokasi_kerja==$me['id_lokasi_kerja'])
				  			{
				  	?>
	                                            <option value="<?php echo $me['id_lokasi_kerja']; ?>" selected="selected">
	                                                <?php echo $me['lokasi_kerja']; ?>
	                                            </option>
	                                            <?php
				  			}
				  			else
				  			{
				  	?>
	                                                <option value="<?php echo $me['id_lokasi_kerja']; ?>">
	                                                    <?php echo $me['lokasi_kerja']; ?>
	                                                </option>
	                                                <?php
				  			}
				  		}
				  	?>
	                                    </select>
	                                </div>
	                            </div>
	                            <script type="text/javascript">
	                            	$(document).ready(function() {
	                            		$('#jabatan_fungsional1').hide();
	                            		//$('#jabatan_fungsional2').hide();
	                            		$('#jenis_pegawai').change(function() {
	                            			var jenispegawai = $(this).val();
	                            			if (jenispegawai == "1") {
	                            				$('#jabatan_fungsional1').show();
	                            				$('#jabatan_fungsional2').hide();
	                            			}
	                            			if (jenispegawai == "2" || jenispegawai == "") {
	                            				$('#jabatan_fungsional1').hide();
	                            				$('#jabatan_fungsional2').show();
	                            			}
	                            		});
	                            		

	                            		<?php if ($jenis_pegawai != "") { ?>
	                            			var jenis_pegawai = <?php echo $jenis_pegawai; ?>;
	                            			if (jenis_pegawai == 2) {
	                            				$('#jabatan_fungsional1').hide();
	                            				$('#jabatan_fungsional2').show();
	                            			}
	                            			if (jenis_pegawai == 1) {
	                            				$('#jabatan_fungsional1').show();
	                            				$('#jabatan_fungsional2').hide();
	                            			}	
	                            		<?php } ?>
	                            		
	                            	});
	                            </script>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Jenis Pegawai</label>
	                                <div class="controls">
	                                    <select data-placeholder="Jenis Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="jenis_pegawai" id="jenis_pegawai">
	                                        <option value=""></option>
	                                        <?php
				  		foreach($mst_jenis_pegawai->result_array() as $me)
				  		{
				  			if($jenis_pegawai==$me['id_jenis_pegawai'])
				  			{
				  	?>
	                                            <option value="<?php echo $me['id_jenis_pegawai']; ?>" selected="selected">
	                                                <?php echo $me['nama_jenis_pegawai']; ?>
	                                            </option>
	                                            <?php
				  			}
				  			else
				  			{
				  	?>
	                                                <option value="<?php echo $me['id_jenis_pegawai']; ?>">
	                                                    <?php echo $me['nama_jenis_pegawai']; ?>
	                                                </option>
	                                                <?php
				  			}
				  		}
				  	?>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Jabatan Fungsional</label>
	                                <div class="controls">
	                                	<select data-placeholder="Jabatan Fungsional" class="chzn-select" tabindex="2" name="jabatan_fungsional" id="jabatan_fungsional2" disabled="">
	                                        <option value=""></option>
	                                    </select>
	                                	<select data-placeholder="Jabatan Fungsional" class="chzn-select" tabindex="2" name="jabatan_fungsional" id="jabatan_fungsional1">
	                                        <option value=""></option>
	                                        <?php
				  		foreach($mst_jabatan_fungsional->result_array() as $me)
				  		{
				  			if($jabatan_fungsional==$me['id_jabatan_fungsional'])
				  			{
				  	?>
	                                            <option value="<?php echo $me['id_jabatan_fungsional']; ?>" selected="selected">
	                                                <?php echo $me['nama_jabatan_fungsional']; ?>
	                                            </option>
	                                            <?php
				  			}
				  			else
				  			{
				  	?>
	                                                <option value="<?php echo $me['id_jabatan_fungsional']; ?>">
	                                                    <?php echo $me['nama_jabatan_fungsional']; ?>
	                                                </option>
	                                                <?php
				  			}
				  		}
				  	?>
	                                    </select>
	                                    
	                                </div>
	                            </div>
		            				<div class="control-group">
	                                	<label class="control-label" for="nip">Status Jabatan</label>
	                                <div class="controls">
	                                    <select name="id_status_jabatan" class="chzn-select">
				  	<?php
				  		foreach($mst_stts_jabatan->result_array() as $msj)
				  		{
				  			if($id_status_jabatan==$msj['id_status_jabatan'])
				  			{
				  	?>
				  		<option value="<?php echo $msj['id_status_jabatan']; ?>" selected="selected"><?php echo $msj['nama_jabatan']; ?></option>
				  	<?php
				  			}
				  			else
				  			{
				  	?>
				  		<option value="<?php echo $msj['id_status_jabatan']; ?>"><?php echo $msj['nama_jabatan']; ?></option>
				  	<?php
				  			}
				  		}
				  	?>
				</select>
	                                </div>
	                            </div>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Jabatan</label>
	                                <div class="controls">
	                                    <select data-placeholder="Jabatan" class="chzn-select" style="width:500px;" tabindex="2" name="id_jabatan" id="id_jabatan">
	                                        <option value=""></option>
	                                        <?php
				  		foreach($mst_jabatan->result_array() as $mj)
				  		{
				  			if($id_jabatan==$mj['id_jabatan'])
				  			{
				  	?>
	                                            <option value="<?php echo $mj['id_jabatan']; ?>" selected="selected">
	                                                <?php echo $mj['nama_jabatan']; ?>
	                                            </option>
	                                            <?php
				  			}
				  			else
				  			{
				  	?>
	                                                <option value="<?php echo $mj['id_jabatan']; ?>">
	                                                    <?php echo $mj['nama_jabatan']; ?>
	                                                </option>
	                                                <?php
				  			}
				  		}
				  	?>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Unit Kerja</label>
	                                <div class="controls">
	                                    <select data-placeholder="Unit Kerja" class="chzn-select" style="width:500px;" tabindex="2" name="id_unit_kerja" id="id_unit_kerja">
	                                        <option value=""></option>
	                                        <?php
				  		foreach($mst_unit_kerja->result_array() as $muk)
				  		{
				  			if($id_unit_kerja==$muk['id_unit_kerja'])
				  			{
				  	?>
	                                            <option value="<?php echo $muk['id_unit_kerja']; ?>" selected="selected">
	                                                <?php echo $muk['nama_unit_kerja']; ?>
	                                            </option>
	                                            <?php
				  			}
				  			else
				  			{
				  	?>
	                                                <option value="<?php echo $muk['id_unit_kerja']; ?>">
	                                                    <?php echo $muk['nama_unit_kerja']; ?>
	                                                </option>
	                                                <?php
				  			}
				  		}
				  	?>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Satuan Kerja</label>
	                                <div class="controls">
	                                    <select data-placeholder="Satuan Kerja" class="chzn-select" style="width:500px;" tabindex="2" name="id_satuan_kerja" id="id_satuan_kerja">
	                                        <option value=""></option>
	                                        <?php
				  		foreach($mst_satuan_kerja->result_array() as $msk)
				  		{
				  			if($id_satuan_kerja==$msk['id_satuan_kerja'])
				  			{
				  	?>
	                                            <option value="<?php echo $msk['id_satuan_kerja']; ?>" selected="selected">
	                                                <?php echo $msk['nama_satuan_kerja']; ?>
	                                            </option>
	                                            <?php
				  			}
				  			else
				  			{
				  	?>
	                                                <option value="<?php echo $msk['id_satuan_kerja']; ?>">
	                                                    <?php echo $msk['nama_satuan_kerja']; ?>
	                                                </option>
	                                                <?php
				  			}
				  		}
				  	?>
	                                    </select>
	                                </div>
	                            </div>
	                            
	         
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Nomor SK</label>
	                                <div class="controls">
	                                    <?php
				if($st=="tambah")
				{
				?>
	                                    <input type="text" class="span6" name="nomor_sk_jabatan" id="nomor_sk_jabatan" value="<?php echo set_value('nomor_sk_jabatan'); ?>" placeholder="Nomor SK Jabatan">
	                                    <?php
				}
				else
				{
				?>
	                                    <input type="text" class="span6" name="nomor_sk_jabatan" id="nomor_sk_jabatan" value="<?php echo $nomor_sk_jabatan; ?>" placeholder="Nomor SK Jabatan">
	                                    <?php
				}
				?>
	                                </div>
	                            </div>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Tanggal SK</label>
	                                <div class="controls">
	                                    <?php
				if($st=="tambah")
				{
				?>
	                                    <div class="input-group date" data-provide="datepicker">
	                                        <input type="text" class="form-control" name="tanggal_sk_jabatan" id="tanggal_sk_jabatan" value="<?php echo set_value('tanggal_sk_jabatan'); ?>" placeholder="Tanggal SK Jabatan" style="width: 99%">
	                                        <div class="input-group-addon">
	                                            <span class="glyphicon glyphicon-th"></span>
	                                        </div>
	                                    </div>
	                                    <?php
				}
				else
				{
				?>
	                                    <div class="input-group date" data-provide="datepicker">
	                                        <input type="text" class="form-control" name="tanggal_sk_jabatan" id="tanggal_sk_jabatan" value="<?php echo $tanggal_sk_jabatan; ?>" placeholder="Tanggal SK Jabatan" style="width: 99%">
	                                        <div class="input-group-addon">
	                                            <span class="glyphicon glyphicon-th"></span>
	                                        </div>
	                                    </div>
	                                    <?php
				}
				?>
	                                </div>
	                            </div>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Tanggal Mulai</label>
	                                <div class="controls">
	                                    <?php
				if($st=="tambah")
				{
				?>
	                                    <div class="input-group date" data-provide="datepicker">
	                                        <input type="text" class="form-control" name="tanggal_mulai_jabatan" id="tanggal_mulai_jabatan" value="<?php echo set_value('tanggal_mulai_jabatan'); ?>" placeholder="Tanggal Mulai Jabatan" style="width: 99%">
	                                        <div class="input-group-addon">
	                                            <span class="glyphicon glyphicon-th"></span>
	                                        </div>
	                                    </div>
	                                    <?php
				}
				else
				{
				?>
	                                    <div class="input-group date" data-provide="datepicker">
	                                        <input type="text" class="form-control" name="tanggal_mulai_jabatan" id="tanggal_mulai_jabatan" value="<?php echo $tanggal_mulai_jabatan; ?>" placeholder="Tanggal Mulai Jabatan" style="width: 99%">
	                                        <div class="input-group-addon">
	                                            <span class="glyphicon glyphicon-th"></span>
	                                        </div>
	                                    </div>
	                                    <?php
				}
				?>
	                                </div>
	                            </div>
	                            <div class="control-group">
	                                <label class="control-label" for="nip">Tanggal Selesai</label>
	                                <div class="controls">
	                                    <?php
				if($st=="tambah")
				{
				?>
	                                    <div class="input-group date" data-provide="datepicker">
	                                        <input type="text" class="form-control" name="tanggal_selesai_jabatan" id="tanggal_selesai_jabatan" value="<?php echo set_value('tanggal_selesai_jabatan'); ?>" placeholder="Tanggal Selesai Jabatan" style="width: 99%">
	                                        <div class="input-group-addon">
	                                            <span class="glyphicon glyphicon-th"></span>
	                                        </div>
	                                    </div>
	                                    <?php
				}
				else
				{
				?>
	                                    <div class="input-group date" data-provide="datepicker">
	                                        <input type="text" class="form-control" name="tanggal_selesai_jabatan" id="tanggal_selesai_jabatan" value="<?php echo $tanggal_selesai_jabatan; ?>" placeholder="Tanggal Selesai Jabatan" style="width: 99%">
	                                        <div class="input-group-addon">
	                                            <span class="glyphicon glyphicon-th"></span>
	                                        </div>
	                                    </div>
	                                    <?php
				}
				?>
	                                </div>
	                            </div>
		            			</div>
		            		</div>
		            	</div>
		            </div>
		        </div>
		  		<div class="tab-pane fade" id="dtfoto">
		  			<div class="col-sm-12">
		  				<div class="card">
							<div class="card-block">
						        <div class="control-group">
									<label class="control-label" for="nip">Upload Foto</label>
									<div class="controls">
									<input type="file" class="span6" name="userfile" id="userfile" placeholder="Upload Foto">
									</div>
								</div>
							</div>
							  <div class="control-group">
								<div class="controls">
								  <button type="submit" class="btn btn-primary">Simpan Data</button>
								  <button type="reset" class="btn">Hapus Data</button>
								</div>
							  </div>
				  			<input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
				  			<input type="hidden" name="st" value="<?php echo $st; ?>">
				  			<input type="hidden" name="frame" value="frame">
				  			<!-- <script src="<?php //echo base_url(); ?>asset/js/chosen.jquery.js" type="text/javascript"></script>
							<script type="text/javascript"> 
								$(".chzn-select").chosen();
							</script> -->
						</div> 
		  			</div>
		  		</div>
	  		</div>
	  		<?php echo form_close(); ?>
		</div>
	</section>
	<?php if($st == "edit") { ?>
	<section id="data-keluarga">
		  <div class="well">
			<div class="page-header">
		    	<h1>Data Keluarga</h1>
		  	</div>
		  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_keluarga/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Keluarga</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
		  	<table class="table table-hover table-condensed">
		    <thead>
		      <tr>
		        <th>No.</th>
		        <th>Nama Keluarga</th>
				<th>Tanggal Lahir</th>
		        <th>Status Kawin</th>
		        <th>Tanggal Nikah</th>
				<th>Pekerjaan</th>
				<th>Aksi</th>
		      </tr>
		    </thead>
		    <tbody>
			<?php
				$no=1;
				foreach($data_keluarga->result_array() as $dk)
				{
			?>
		      <tr>
		        <td><?php echo $no; ?></td>
		        <td><?php echo $dk['nama_anggota_keluarga']; ?></td>
		        <td><?php echo date("Y-m-d", strtotime($dk['tanggal_lahir'])); ?></td>
		        <td><?php echo $dk['status_kawin']; ?></td>
		        <td><?php echo $dk['tanggal_nikah']; ?></td>
		        <td><?php echo $dk['pekerjaan']; ?></td>
				<td>
			        <div class="btn-group">
			          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_keluarga/detail/<?php echo $dk['id_data_keluarga']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
			          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="<?php echo base_url(); ?>data_keluarga/edit/<?php echo $dk['id_data_keluarga']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
			            <li><a href="<?php echo base_url(); ?>data_keluarga/hapus/<?php echo $dk['id_data_keluarga']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
			          </ul>
			        </div><!-- /btn-group -->
				</td>
		      </tr>
			 <?php
			 		$no++;
			 	}
			 ?>
		    </tbody>
		  </table>
		  </div>
	</section>
	<section id="data-pangkat">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Riwayat Pangkat</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Riwayat Pangkat</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Golongan</th>
			<th>Status</th>
	        <th>Nomor SK</th>
	        <th>Tanggal SK</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Masa Kerja</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_riwayat_pangkat->result_array() as $drp)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $drp['golongan']; ?></td>
	        <td><?php echo $drp['status']; ?></td>
	        <td><?php echo $drp['nomor_sk']; ?></td>
	        <td><?php echo $drp['tanggal_sk']; ?></td>
	        <td><?php echo $drp['tanggal_mulai']; ?></td>
	        <td><?php echo $drp['tanggal_selesai']; ?></td>
	        <td><?php echo $drp['masa_kerja']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_riwayat_pangkat/detail/<?php echo $drp['id_riwayat_pangkat']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/edit/<?php echo $drp['id_riwayat_pangkat']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_riwayat_pangkat/hapus/<?php echo $drp['id_riwayat_pangkat']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-jabatan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Riwayat Jabatan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_riwayat_jabatan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Riwayat Jabatan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Status</th>
			<th>Penempatan</th>
	        <th>Jabatan</th>
	        <th>Unit Kerja</th>
			<th>Pangkat</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_riwayat_jabatan->result_array() as $drj)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td>
	        <?php
		  		foreach($mst_stts_jabatan->result_array() as $msj)
		  		{
		  			if($drj['status']==$msj['id_status_jabatan'])
		  			{
		  				echo $msj['nama_jabatan'];
		  			}
		  		}
			?>
	        </td>
	        <td><?php echo $drj['penempatan']; ?></td>
	        <td><?php echo $drj['nama_jabatan']; ?></td>
	        <td><?php echo $drj['nama_unit_kerja']; ?></td>
	        <td><?php echo $drj['nama_eselon']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_riwayat_jabatan/detail/<?php echo $drj['id_riwayat_jabatan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_riwayat_jabatan/edit/<?php echo $drj['id_riwayat_jabatan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_riwayat_jabatan/hapus/<?php echo $drj['id_riwayat_jabatan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-pendidikan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Pendidikan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_pendidikan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Pendidikan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Tingkat Pendidikan</th>
			<th>Jurusan</th>
	        <th>Teknik/Non Teknik</th>
	        <th>Sekolah</th>
			<th>Tanggal Lulus</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_pendidikan->result_array() as $dpn)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dpn['tingkat_pendidikan']; ?></td>
	        <td><?php echo $dpn['jurusan']; ?></td>
	        <td><?php echo $dpn['teknik_non_teknik']; ?></td>
	        <td><?php echo $dpn['sekolah']; ?></td>
	        <td><?php echo $dpn['tanggal_lulus']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_pendidikan/detail/<?php echo $dpn['id_pendidikan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_pendidikan/edit/<?php echo $dpn['id_pendidikan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_pendidikan/hapus/<?php echo $dpn['id_pendidikan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>

	</section>
	<section id="data-pelatihan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Pelatihan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_pelatihan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Pelatihan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama Pelatihan</th>
			<th>Lokasi</th>
	        <th>Tanggal Sertifikat</th>
	        <th>Jam Pelatihan</th>
			<th>Negara</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_pelatihan->result_array() as $dpl)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dpl['nama_pelatihan']; ?></td>
	        <td><?php echo $dpl['lokasi']; ?></td>
	        <td><?php echo $dpl['tanggal_sertifikat']; ?></td>
	        <td><?php echo $dpl['jam_pelatihan']; ?></td>
	        <td><?php echo $dpl['negara']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_pelatihan/detail/<?php echo $dpl['id_pelatihan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_pelatihan/edit/<?php echo $dpl['id_pelatihan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_pelatihan/hapus/<?php echo $dpl['id_pelatihan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-penghargaan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Penghargaan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_penghargaan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Penghargaan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama Penghargaan</th>
			<th>Nomor SK</th>
	        <th>Tanggal SK</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_penghargaan->result_array() as $drj)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $drj['nama_penghargaan']; ?></td>
	        <td><?php echo $drj['nomor_sk']; ?></td>
	        <td><?php echo $drj['tanggal_sk']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_penghargaan/detail/<?php echo $drj['id_penghargaan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_penghargaan/edit/<?php echo $drj['id_penghargaan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_penghargaan/hapus/<?php echo $drj['id_penghargaan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-seminar">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Seminar</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_seminar/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Seminar</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Uraian</th>
			<th>Lokasi</th>
	        <th>Tanggal</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_seminar->result_array() as $ds)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $ds['uraian']; ?></td>
	        <td><?php echo $ds['lokasi']; ?></td>
	        <td><?php echo $ds['tanggal']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_seminar/detail/<?php echo $ds['id_seminar']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_seminar/edit/<?php echo $ds['id_seminar']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_seminar/hapus/<?php echo $ds['id_seminar']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-organisasi">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Organisasi</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_organisasi/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Organisasi</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Uraian</th>
			<th>Lokasi</th>
	        <th>Tanggal</th>
			<th>Aksi</th>

	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_organisasi->result_array() as $do)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $do['uraian']; ?></td>
	        <td><?php echo $do['lokasi']; ?></td>
	        <td><?php echo $do['tanggal']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_organisasi/detail/<?php echo $do['id_organisasi']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_organisasi/edit/<?php echo $do['id_organisasi']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_organisasi/hapus/<?php echo $do['id_organisasi']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-gaji">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Gaji Pokok</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_gaji_pokok/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Gaji Pokok</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Golongan</th>
			<th>Nomor SK</th>
	        <th>Tanggal SK</th>
	        <th>Gaji Pokok</th>
			<th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_gaji_pokok->result_array() as $dgp)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dgp['golongan']; ?></td>
	        <td><?php echo $dgp['nomor_sk']; ?></td>
	        <td><?php echo $dgp['tanggal_sk']; ?></td>
	        <td><?php echo "Rp. ".number_format($dgp['gaji_pokok'],2,',','.'); ?></td>
	        <td><?php echo $dgp['tanggal_mulai']; ?></td>
	        <td><?php echo $dgp['tanggal_selesai']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_gaji_pokok/detail/<?php echo $dgp['id_gaji_pokok']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_gaji_pokok/edit/<?php echo $dgp['id_gaji_pokok']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_gaji_pokok/hapus/<?php echo $dgp['id_gaji_pokok']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-hukuman">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Hukuman</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_hukuman/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Hukuman</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama Hukuman</th>
			<th>Nomor SK</th>
	        <th>Tanggal SK</th>
	        <th>Tanggal Mulai</th>
			<th>Tanggal Selesai</th>
			<th>Masa Berlaku</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_hukuman->result_array() as $dh)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dh['nama_hukuman']; ?></td>
	        <td><?php echo $dh['nomor_sk']; ?></td>
	        <td><?php echo $dh['tanggal_sk']; ?></td>
	        <td><?php echo $dh['tanggal_mulai']; ?></td>
	        <td><?php echo $dh['tanggal_selesai']; ?></td>
	        <td><?php echo $dh['masa_berlaku']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_hukuman/detail/<?php echo $dh['id_hukuman']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_hukuman/edit/<?php echo $dh['id_hukuman']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_hukuman/hapus/<?php echo $dh['id_hukuman']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-dp3">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Penilaian Atasan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_dp3/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Penilaian Atasan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Tahun</th>
			<th>Rata-Rata</th>
			<th>Atasan</th>
	        <th>Penilai</th>
	        <th>Mengetahui</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_dp3->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['tahun']; ?></td>
	        <td><?php echo $dp3['rata_rata']; ?></td>
	        <td><?php echo $dp3['atasan']; ?></td>
	        <td><?php echo $dp3['penilai']; ?></td>
	        <td><?php echo $dp3['mengetahui']; ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_dp3/detail/<?php echo $dp3['id_dp3']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_dp3/edit/<?php echo $dp3['id_dp3']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_dp3/hapus/<?php echo $dp3['id_dp3']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-pekerjaan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Riwayat Pekerjaan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_riwayat_pekerjaan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Riwayat Pekerjaan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama Perusahaan</th>
			<th>Jabatan</th>
			<th>Dari Tanggal</th>
	        <th>Sampai Tanggal</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_riwayat_pekerjaan->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_perusahaan'] ?></td>
	        <td><?php echo $dp3['bidang_perusahaan'] ?></td>
	        <td><?php echo $dp3['tanggal_awal_pekerjaan'] ?></td>
	        <td><?php echo $dp3['tanggal_akhir_pekerjaan'] ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_riwayat_pekerjaan/detail/<?php echo $dp3['id_riwayat_pekerjaan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_riwayat_pekerjaan/edit/<?php echo $dp3['id_riwayat_pekerjaan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_riwayat_pekerjaan/hapus/<?php echo $dp3['id_riwayat_pekerjaan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-atasan_pekerjaan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Atasan Pekerjaan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_atasan_pekerjaan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Atasan Pekerjaan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama</th>
	        <th>Jabatan</th>
			<th>Perusahaan</th>
			<th>Nomor Telepon</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_atasan_pekerjaan->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_atasan_pekerjaan'] ?></td>
	        <td><?php echo $dp3['jabatan_atasan_pekerjaan'] ?></td>
	        <td><?php echo $dp3['perusahaan_atasan_pekerjaan'] ?></td>
	        <td><?php echo $dp3['nomor_telepon_pekerjaan'] ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_atasan_pekerjaan/detail/<?php echo $dp3['id_atasan_pekerjaan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_atasan_pekerjaan/edit/<?php echo $dp3['id_atasan_pekerjaan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_atasan_pekerjaan/hapus/<?php echo $dp3['id_atasan_pekerjaan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-kesehatan">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Riwayat Kesehatan</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_riwayat_kesehatan/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Riwayat Kesehatan</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama Penyakit</th>
			<th>Tanggal Dirawat</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_riwayat_kesehatan->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_penyakit'] ?></td>
	        <td><?php echo $dp3['tanggal_riwayat'] ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_riwayat_kesehatan/detail/<?php echo $dp3['id_riwayat_kesehatan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_riwayat_kesehatan/edit/<?php echo $dp3['id_riwayat_kesehatan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_riwayat_kesehatan/hapus/<?php echo $dp3['id_riwayat_kesehatan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-referensi">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Referensi</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_referensi/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Referensi</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Nama</th>
			<th>Hubungan</th>
			<th>No Telp</th>
			<th>Jabatan</th>
			<th>Perusahaan</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_referensi->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php echo $dp3['nama_referensi'] ?></td>
	        <td><?php echo $dp3['jabatan_referensi'] ?></td>
	        <td><?php echo $dp3['no_telepon_referensi'] ?></td>
	        <td><?php echo $dp3['perusahaan_referensi'] ?></td>
	        <td><?php echo $dp3['hubungan_referensi'] ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_referensi/detail/<?php echo $dp3['id_referensi']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_referensi/edit/<?php echo $dp3['id_referensi']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_referensi/hapus/<?php echo $dp3['id_referensi']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<section id="data-lain">
	  <div class="well">
		<div class="page-header">
	    	<h1>Data Lain - Lain</h1>
	  	</div>
	  	<div class="navbar navbar-inverse">
		  		<div class="navbar-inner">
      				<div class="nav-collapse">
      					<ul class="nav">
        					<li><a href="<?php echo base_url(); ?>data_lain/tambah" class="small-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Lain - Lain</a></li>
      					</ul>
      				</div>
      			</div>
      		</div>
	  	<table class="table table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>No.</th>
	        <th>Pertanyaan</th>
			<th>Keterangan</th>
			<th>Aksi</th>
	      </tr>
	    </thead>
	    <tbody>
		<?php
			$no=1;
			foreach($data_lain->result_array() as $dp3)
			{
		?>
	      <tr>
	        <td><?php echo $no; ?></td>
	        <td><?php foreach ($mst_pertanyaan->result_array() as $key) {
	        	if ($key['id_pertanyaan'] == $dp3['id_pertanyaan']) {
	        		echo $key['nama_pertanyaan'];
	        	}
	        } ?></td>
	        <td><?php echo $dp3['keterangan'] ?></td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small medium-box" href="<?php echo base_url(); ?>data_lain/detail/<?php echo $dp3['id_lain']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
		          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>data_lain/edit/<?php echo $dp3['id_lain']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
		            <li><a href="<?php echo base_url(); ?>data_lain/hapus/<?php echo $dp3['id_lain']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
		          </ul>
		        </div><!-- /btn-group -->
			</td>
	      </tr>
		 <?php
		 		$no++;
		 	}
		 ?>
	    </tbody>
	  </table>
	  </div>
	</section>
	<?php }?>
</div>
<div class="container">
	<?php include "application/views/dashboard_admin/home/footer.php" ?>
</div>	
		
	
