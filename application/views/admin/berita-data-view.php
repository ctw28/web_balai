<?php
foreach ($data as $row) { 
    echo '<h2>'.$row->judul_berita.'</h2>';
    echo '<p>'.$row->status.'</p>';
    echo '<p>'.$row->tanggal_publish.'</p>';
    echo '<p>'.$row->by.'</p>';
    echo '<p>'.$row->isi_berita.'</p>';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
