<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pelanggan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        require_once 'dbkoneksi.php';
    ?>
    <?php 
    $sql = "SELECT * FROM pelanggan";
    $rs = $dbh->query($sql);
    ?>
    <a class="btn btn-success" href="form_pelanggan.php" role="button">Create pelanggan</a><br><br>
    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>jenis kelamin</th>
                    <th>tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>email</th>
                    <th>kartu id</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['jk']?></td>
                        <td><?=$row['tmp_lahir']?></td>
                        <td><?=$row['tgl_lahir']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['kartu_id']?></td>
                        <td>
                        <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                        <a class="btn btn-primary" href="form_produk.php?idedit=<?=$row['id']?>">Edit</a>
                        <a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
                        onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}">Delete</a>
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
    </table>  

</body>
</html>