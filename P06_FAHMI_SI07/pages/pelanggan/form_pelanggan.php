<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pelanggan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
    require_once '../../database/dbkoneksi.php';
    if (isset($_GET["idedit"])) {
      $idedit = $_GET["idedit"];
      $query = "SELECT * FROM pelanggan WHERE id = '$idedit'";
      $sql = $dbh->query($query);
      $row = $sql->fetch();
    }
    ?>
            
    <form method="POST" action="../../proces/pelanggan/proses_pelanggan.php">
      <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-usd" aria-hidden="true"></i>
              </div>
            </div> 
            <input id="kode" name="kode" type="text" class="form-control"
            value="<?php if (isset($_GET["idedit"])) {echo $row["kode"];} ?>">
            <input id="" name="idedit" type="hidden" class="form-control" value="<?php $idedit?>">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-user" aria-hidden="true"></i>
              </div>
            </div> 
            <input id="nama" name="nama" type="text" class="form-control" 
            value="<?php if (isset($_GET["idedit"])) {echo $row["nama"];} ?>">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="harga_beli" class="col-4 col-form-label">Jenis Kelamin</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-text">
              <i class="fa fa-male" aria-hidden="true"></i> 
            </div>
            <input id="jk" name="jk" value="L" type="radio" class="form-control"
            <?php if(isset($_GET["idedit"])) {if($row["jk"] == "L"){echo "checked";}} ?>>
            <div class="input-group-text">
              <i class="fa fa-female" aria-hidden="true"></i> 
            </div>
            <input id="jk" name="jk" value="P" type="radio" class="form-control"
            <?php if(isset($_GET["idedit"])) {if($row["jk"] == "P"){echo "checked";}} ?>>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Tempat Lahir</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-hospital-o" aria-hidden="true"></i>
              </div>
            </div> 
            <input id="tmp_lahir" name="tmp_lahir" value="<?php if (isset($_GET["idedit"])) {echo $row["tmp_lahir"];} ?>"
            type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </div>
            </div> 
            <input id="tgl_lahir" name="tgl_lahir" 
            value="<?php if (isset($_GET["idedit"])) {echo $row["tgl_lahir"];} ?>"
            type="date" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">email</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
            </div> 
            <input id="email" name="email" 
            value="<?php if (isset($_GET["idedit"])) {echo $row["email"];} ?>"
            type="email" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Kartu</label>
        <div class="col-8">
              <?php 
                  $sqljenis = "SELECT * FROM kartu";
                  $rsjenis = $dbh->query($sqljenis);
              ?>
          <select id="kartu_id" name="kartu_id" class="custom-select">
              <?php 
                if (isset($_GET["idedit"])) {
                  $id_kartu = $row["kartu_id"];
                  $query2 = "SELECT * FROM kartu WHERE id = '$id_kartu'";
                  $sql2 = $dbh->query($query2);
                  $row2 = $sql2->fetch();
                  echo '<option value="'.$row2['id'].'">'.$row2['nama'].'</option>';
                }
                foreach($rsjenis as $rowjenis){
            ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
            <?php
                }
            ?>
          </select>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <input type="submit" name="proses" type="submit" 
          class="btn btn-primary" value="<?php if (isset($_GET["idedit"])) {echo "Update";} else{echo "Simpan";} ?>"/>
        </div>
      </div>
    </form>
</body>
</html>