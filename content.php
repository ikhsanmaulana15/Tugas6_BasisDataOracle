<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='barang') {
          include "barang/barang.php";
        }
        elseif ($_GET['hal']=='tambah_barang') {
          include "barang/tambah_barang.php";
        }
        elseif ($_GET['hal']=='edit_barang') {
          include "barang/edit_barang.php";
        }

        if ($_GET['hal']=='jenis_barang') {
          include "jenis_barang/jenis_barang.php";
        }
        elseif ($_GET['hal']=='tambah_jenis_barang') {
          include "jenis_barang/tambah_jenis_barang.php";
        }
        elseif ($_GET['hal']=='edit_jenis_barang') {
          include "jenis_barang/edit_jenis_barang.php";
        }
        else
        {
          include "home.php";
        }
    }else{
    include "home.php";
    }


    
?>