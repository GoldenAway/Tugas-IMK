<?php 
require 'perhitungan.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Program Linear</title>
	<style type="text/css">
		body
		{
			background-color: #B22222;
			color: #FFFFFF;
		}
	</style>
</head>
<body>
	<header style="background-color: #B22222; text-align: center; color: #FFFFFF; font-family: cursive;">
		<h1>HASIL PERHITUNGAN</h1>
	</header>
<div align="center">
<?php 
if (isset($_GET["kirim"])&&($_GET["x1"])&&($_GET["y1"])&&($_GET["z1"])&&($_GET["x2"])&&($_GET["y2"])&&($_GET["z2"])&&($_GET["x3"])&&($_GET["y3"])) { $hit = new PersLinear($_GET["x1"], $_GET["x2"], $_GET["x3"], $_GET["y1"], $_GET["y2"], $_GET["y3"], $_GET["z1"], $_GET["z2"]); ?>
<label>Titik Koordinat Pertidaksamaan <b><?php if ($_GET["x1"]>1) { echo $_GET["x1"]; } ?>X + <?php if ( $_GET["y1"]>1) { echo $_GET["y1"]; } ?>Y &le; <?= $_GET["z1"]; ?></b></label>
<table border="1" style="border-collapse: collapse">
	<tr style=" background: #8B0000">
		<th width="35px">X</th>
		<th width="35px">Y</th>
		<th width="50px">(X,Y)</th>
	</tr>
	<tr>
		<td align="center"><?= $hit->hitungx11()?></td>
		<td align="center">0</td>
		<td align="center">(<?= $hit->hitungx11()?>, 0)</td>
	</tr>
	<tr>
		<td align="center">0</td>
		<td align="center"><?= $hit->hitungy11()?></td>
		<td align="center">(0, <?= $hit->hitungy11()?>)</td>
	</tr>
</table>
<br>
<label>Titik Koordinat Pertidaksamaan <b><?php if ($_GET["x2"]>1) { echo $_GET["x2"]; } ?>X + <?php if ( $_GET["y2"]>1) { echo $_GET["y2"]; } ?>Y &le; <?= $_GET["z2"]; ?></b></label>
<table border="1" style="border-collapse: collapse; position: relative; left: 0px; top: 0px">
	<tr style=" background: #8B0000">
		<th width="35px">X</th>
		<th width="35px">Y</th>
		<th width="50px">(X,Y)</th>
	</tr>
	<tr>
		<td align="center"><?= $hit->hitungx22()?></td>
		<td align="center">0</td>
		<td align="center">(<?= $hit->hitungx22()?>, 0)</td>
	</tr>
	<tr>
		<td align="center">0</td>
		<td align="center"><?= $hit->hitungy22()?></td>
		<td align="center">(0, <?= $hit->hitungy22()?>)</td>
	</tr>
</table>
<br>
<label>Titik Pojok yang Memenuhi</label>
<table border="1" style="border-collapse: collapse;">
	<tr style=" background: #8B0000">
		<th>Titik Pojok</th>
		<th>Koordinat</th>
	</tr>
	<tr>
		<td align="center">A</td>
		<td align="center">(<?php if($hit->hitungx11()<$hit->hitungx22()) {
			echo $hit->hitungx11(); } else { echo $hit->hitungx22(); }
			?>, 0)
		</td>
	</tr>
	<tr>
		<td align="center">B</td>
		<td align="center">(0, <?php if($hit->hitungy11()<$hit->hitungy22()) {
			echo $hit->hitungy11(); } else { echo $hit->hitungy22(); }
			?>)</td>
	</tr>
	<tr>
		<td align="center">C</td>
		<td align="center">(<?= $hit->hitungx33()?>, <?= $hit->hitungy33()?>)</td>
	</tr>
</table>
<br>
<label>Nilai Maksimum/Minimum</label>
<table border="1" style="border-collapse: collapse;">
	<form action="tampil.php" method="get">
		<tr style=" background: #8B0000">
			<th>Titik Pojok</th>
			<th>Nilai Fungsi Tujuan</th>
		</tr>
		<tr>
			<td align="center">(<?php if($hit->hitungx11()<$hit->hitungx22()) {
			echo $hit->hitungx11(); } else { echo $hit->hitungx22(); }
			?>, 0)</td>
			<td align="center"><?php if ($hit->hitungx11()<$hit->hitungx22()) { echo $hit->hitungMaxMin($hit->hitungx11(), 0); } else { echo $hit->hitungMaxMin($hit->hitungx22(), 0); }?></td>
		</tr>
		<tr>
			<td align="center">(0, <?php if($hit->hitungy11()<$hit->hitungy22()) {
			echo $hit->hitungy11(); } else { echo $hit->hitungy22(); }
			?>)</td>
			<td align="center"><?php if ($hit->hitungy11()<$hit->hitungy22()) { echo $hit->hitungMaxMin(0, $hit->hitungy11()); } else { echo $hit->hitungMaxMin(0, $hit->hitungy22()); }?></td>
		</tr>
		<tr>
			<td align="center">(<?= $hit->hitungx33() ?>, <?= $hit->hitungy33()?>)</td>
			<td align="center"><?= $hit->hitungMaxMin($hit->hitungx33(), $hit->hitungy33())?></td>
		</tr>
	</form>
</table>
<br>
<button style="background-color: #E9633B; color: #FFFFFF; width: 60px; height: 25px; border: 10px; border-radius: 10px" onclick="window.location.href='index.php'">Kembali</button>
<?php } ?>
    <footer style="width: 100%; height: 50px; padding-left: 10px; line-height: 50px; background: #FFFFFF; color: #000000; position: absolute; bottom: 0px">
      <address>
		Yestrada Henanda // Pian Rispian // Nisa Nur Afifah
      </address>
    </footer>
</div>
</body>
</html>