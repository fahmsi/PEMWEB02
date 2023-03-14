<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hnadling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="blajar_get.php" method="Get">
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama" ><br><br>

        <label for="">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki">
            <label for="">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label for="">Perempuan</label><br><br>

        <label for="">Hobi</label><br>
        <input type="checkbox" name="hobi" value="futsal">
            <label for="">Futsal</label><br>
        <input type="checkbox" name="hobi" value="badmin">
            <label for="">Badmin</label><br>
        <input type="checkbox" name="hobi" value="basket">
            <label for="">Basket</label><br><br>

        <label for="">NIM</label>
        <input type="number" name="nim"><br><br>

        <label for="">Prodi</label><br>
        <select name="prodi">
            <option value="teknik informtika">teknik informtika</option>
            <option value="sistem informasi">sistem informasi</option>
            <option value="bisnis digital">bisnis digital</option>
        </select><br><br>

        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>