<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai Siswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h3 class="text-center mb-5">Daftar Nilai Siswa</h3>
        <?php
        $ns1 = ['id'=>1,'nama'=>'sudrajat','nim'=>'0110113771','uts'=>80,'uas'=>84,'tugas'=>78];
        $ns2 = ['id'=>2,'nama'=>'sugandi','nim'=>'0112108991','uts'=>70,'uas'=>50,'tugas'=>68];
        $ns3 = ['id'=>3,'nama'=>'suroji','nim'=>'0113014871','uts'=>60,'uas'=>86,'tugas'=>70];
        $ns4 = ['id'=>4,'nama'=>'sumarno','nim'=>'0113409121','uts'=>90,'uas'=>91,'tugas'=>82];

        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

        ?>

	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">NIM</th>
				<th scope="col">UTS</th>
				<th scope="col">UAS</th>
				<th scope="col">Tugas</th>
				<th scope="col">Nilai Akhir</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$nomor = 1;
			foreach($ar_nilai as $ns) {
				echo '<tr>';
				echo '<th scope="row">'.$nomor.'</th>';
				echo '<td>'.$ns['nama'].'</td>';
				echo '<td>'.$ns['nim'].'</td>';
				echo '<td>'.$ns['uts'].'</td>';
				echo '<td>'.$ns['uas'].'</td>';
				echo '<td>'.$ns['tugas'].'</td>';
				$nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
				echo '<td>'.number_format($nilai_akhir, 2, ',', '.').'</td>';
				echo '</tr>';
				$nomor++;
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>
