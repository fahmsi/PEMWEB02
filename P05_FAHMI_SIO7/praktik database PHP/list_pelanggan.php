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
    <br>
    <a class="btn btn-primary" href="form_pelanggan.php" role="button">Create Pelanggan <i class="fa fa-user-plus" aria-hidden="true"></i></a><br><br>
    <table class="table table-hover table-striped" width="100%" border="1" cellspacing="2" cellpadding="2">
        <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                    <th>Action</th>
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
                            <a class="btn btn-success" href="view_pelanggan.php?id=<?=$row['id']?>"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                            <a class="btn btn-secondary" href="form_pelanggan.php?idedit=<?=$row['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            <a class="btn btn-danger" href="delete_pelanggan.php?iddel=<?=$row['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?=$row['nama']?>?')) {return false}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
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