<?php 
require_once("dbkoneksi.php");
if (isset($_GET["iddel"])) {
    $iddel = $_GET["iddel"];
    $query = "DELETE FROM produk WHERE id = '$iddel'";
    $delete = $dbh->query($query);
    echo '<meta http-equiv="refresh" content="0; url=list_produk.php">';
}

?>