<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Form Tambah Berita</b></h4>
            <!--<p class="text-muted m-b-30 font-13">Mohon input data berita setelah datanya telah di validasi.</p>-->
            <div class="row">
                <div class="col-md-12">    
                    <?php echo validation_errors(); ?>

                    <?php echo form_open_multipart('admin/berita_rest', 'class="form-horizontal"', 'role="form"'); ?>

                    <div class="form-group">
                        <label class="col-md-1 control-label">ID Berita</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="id" id="id" readonly />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Kategori Berita</label>
                        <div class="col-sm-6">
                            <?php echo cmb_get_from_db("kategori", "t_berita_kategori", "id_kategori", "nama_kategori", $kategori); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Judul Berita<small class="req-sign">*</small></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Berita...." parsley-trigger="change"  value="<?php echo set_value('judul', $judul) ?>" required />
                        </div>
                        <!-- <img src="<?php echo base_url() ?>assets/images/berita/thumbs/thumb_700X700_ladongi 1.JPG"> -->

                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Foto Utama<small class="req-sign">*</small></label>
                        <div class="col-sm-6">
                            <input type="file" class="filestyle" data-buttonbefore="true" id="pic" name="pic">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Isi Berita<small class="req-sign">*</small></label>
                        <div class="col-md-11">
                            <textarea id="elm1" name="isi_berita"><?php echo set_value('isi_berita', $isi_berita) ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Tambahkan Galeri Foto</label>
                        <div class="col-sm-11">
                            <input type="file" class="filestyle" data-buttonbefore="true" id="pic1" name="pic1[]" multiple>
                        </div>
                    </div>

                    <label class="col-md-1 control-label"></label>
                    <div class="col-sm-6">
                        <div class="form-group m-b-0">
                            <button type="submit" name="submit" class="btn btn-default waves-effect waves-light btn-md">Submit</button>
                        </div>            
                    </div>

                </div> <!-- end col-md-12 -->
            </div> <!-- end row -->
            <p>Keterangan : </p><small class="req-sign">*</small> Harus di Isi
        </div><!-- end card-box -->
    </div><!-- end col-sm-12 -->
</div><!-- end row -->