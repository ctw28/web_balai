<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Form Tambah Berita</b></h4>
            <!--<p class="text-muted m-b-30 font-13">Mohon input data berita setelah datanya telah di validasi.</p>-->
            <div class="row">
                <div class="col-md-12">    
                    <?php echo validation_errors(); ?>

                    <?php echo form_open_multipart('/admin/berita_rest', 'class="form-horizontal"', 'role="form"'); ?>


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
                    </div>

                    <div class="form-group">
                        <label class="col-md-1 control-label">Foto Utama<small class="req-sign">*</small></label>
                        <div class="col-sm-6">
                            <input type="file" class="filestyle" data-buttonbefore="true" id="pic" name="pic" required>
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
                        <div id="show_upload">
                            <?php
                            if ($status == "edit") {
                                foreach ($galeri_foto->result() as $row) {
                                    ?>
                                    <img class="img-prev" src='<?php echo base_url() ?>assets/images/berita/galeri-berita/thumb_300X300_<?php echo $row->foto ?>' width='200px'>
                                    <a href="<?php echo base_url() ?>index.php/admin/data_berita/hapus_foto_galeri/<?php echo $row->id_berita_foto ?>">Hapus</a>                      

                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>                    


                    <div class="form-group">
                        <label class="col-md-1 control-label">Status</label>
                        <div class="col-sm-11">
                            <select name="status">
                                <option value="Publish">Publish</option>
                                <option value="Draft">Draft</option>
                            </select>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('#pic1').on('change', function (e) {
        var files = e.target.files;
        var id = 0;
        $.each(files, function (i, file) {
            id++;
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function (e) { 
                
                var template = '<input type="button" value="Hapus" OnClick="hapus('+id+')" id="id"><p id="img_' + id + '"><img class="prev_image" src="' + e.target.result + '"></p>';
                $('#show_upload').append(template);
            };
        });
    });


    function hapus(id) {
        $('#img_' + id).remove();
        console.log(id);
    }

</script>