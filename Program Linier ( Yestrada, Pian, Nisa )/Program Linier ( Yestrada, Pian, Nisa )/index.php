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
		<h1>MENGHITUNG PROGRAM LINEAR</h1>
		<h3>DUA VARIABEL</h3>
	</header>
	<div align="center">
	<table>
		<form action="tampil.php" method="get">
			<tr>
				<th width="40px" colspan="4" style="text-align: left">Fungsi Kendala:</th>
			</tr>
			<tr>
				<td width="35px">
					<input type="text" name="x1" id="x1" style="width:25px; border-radius:6px; text-align: center;" required>
				</td>
				<td width="35px">
					<label for="x1">X + </label>
				</td>
				<td width="35px">
					<input type="text" name="y1" id="y1" style="width:25px; border-radius:6px; text-align: center"  required>
				</td>
				<td width="35px">
					<label for="y1">Y &le; </label>
				</td>
				<td width="35px">
					<input type="text" name="z1" style="width:45px; border-radius:6px; text-align: center" required>
				</td>
			</tr>
			<tr>
				<td width="35px">
					<input type="text" name="x2" id="x2" style="width:25px; border-radius:6px; text-align: center" required>
				</td>
				<td width="35px">
					<label for="x2">X + </label>
				</td>
				<td width="35px">
					<input type="text" name="y2" id="y2" style="width:25px; border-radius:6px; text-align: center" required>
				</td>
				<td width="35px">
					<label for="y2">Y &le; </label>
				</td>
				<td width="35px">
					<input type="text" name="z2" style="width:45px; border-radius:6px; text-align: center" required>
				</td>
			</tr>
				<tr><th width="50px" colspan="5" style="text-align: left">Fungsi Tujuan F(X,Y):</th></tr>
			<tr>
				<td width="35px" colspan="1">
					<input type="text" name="x3" id="x3" style="width:45px; border-radius:6px; text-align: center" required>
				</td>
				<td width="35px">
					<label for="x3" style="text-align: left">X + </label>
				</td>
				<td width="35px" colspan="1">
					<input type="text" name="y3" id="y3" style="width:45px; border-radius:6px; text-align: center" required>
				</td>
				<td width="35px">
					<label for="y3">Y </label>
				</td>			
			</tr>
			<tr>
					<td colspan="5" style="text-align: center"><button type="submit" name="kirim" style="background-color: #E9633B; color: #FFFFFF; width: 60px; height: 25px; border: 10px; border-radius: 10px">Hitung</button></td>
			</tr>
		</form>
	</table>
    <footer style="width: 100%; height: 50px; padding-left: 10px; line-height: 50px; background: #FFFFFF; color: #000000; position: absolute; bottom: 0px">
      <address>
		Yestrada Henanda // Pian Rispian // Nisa Nur Afifah
      </address>
    </footer>
</div>
</body>
</html>