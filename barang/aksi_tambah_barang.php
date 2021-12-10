<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['KD_BARANG'];
  $idd = $_POST['KD_JENIS'];
  $iddd = $_POST['KD_PETUGAS'];
  $nama = $_POST['NAMA_BARANG'];
  $jumlah = $_POST['JUMLAH_BARANG'];
  $harga = $_POST['HARGA'];
 
 
  
	$query = "INSERT INTO BARANG (KD_BARANG,KD_JENIS,KD_PETUGAS, NAMA_BARANG,JUMLAH, HARGA) VALUES ('".$id."','".$idd."','".$iddd."','".$nama."','".$jumlah."','".$harga."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Barang berhasil ditambahkan'); 
	window.location.href='barang.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data transaksi gagal ditambahkan');
	window.location.href='barang.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: barang.php'); 
}
