<a href="http://localhost/web_balai/admin/berita/tambah">tambah data</a>
<?php
foreach ($berita as $row) { 
    echo '<h2>'.$row->judul_berita.'</h2>';
    echo '<h3>'.$row->nama_kategori.'</h2>';
    echo "<img src= '".base_url()."assets/images/".$row->foto." ' alt ='ini gambar alternatif' width='150px'>";
    echo '<p>'.$row->status.'</p>';
    echo '<p>'.$row->tanggal_publish.'</p>';
    echo '<p>'.$row->by.'</p>';
    echo '<p>'.$row->isi_berita.'</p><hr>';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

