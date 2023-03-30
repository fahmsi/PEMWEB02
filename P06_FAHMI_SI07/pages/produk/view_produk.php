<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
require_once '../../database/dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-hover table-striped">
    <tbody>
        <tr>   <td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama Produk</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Harga Jual</td><td><?=$row['harga_jual']?></td></tr>
        <tr>   <td>Harga Beli</td><td><?=$row['harga_beli']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
        <tr>   <td>Minimum Stok</td><td><?=$row['min_stok']?></td></tr>
        <tr>   <td>Jenis Produk</td><td><?=$row['jenis_produk_id']?></td></tr>
    </tbody>
</table>
</body>
</html>