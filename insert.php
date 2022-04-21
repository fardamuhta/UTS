<html>
<head>
	<title>Input Data Covid</title>
</head>
<body>
	<br/>
 
	<a href="uts.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input_aksi.php" method="post">		
		<table>
			<tr>
				<td>Positif</td>
				<td><input type="text" name="positif"></td>					
			</tr>	
			<tr>
				<td>Dirawat</td>
				<td><input type="text" name="dirawat"></td>					
			</tr>	
			<tr>
				<td>Sembuh</td>
				<td><input type="text" name="sembuh"></td>					
			</tr>	
			<tr>
				<td>Meninggal</td>
				<td><input type="text" name="meninggal"></td>					
			</tr>
            <tr>
				<td>Id Wilayah</td>
				<td><input type="text" name="id_wilayah"></td>					
			</tr>
            <tr>
				<td><button type="submit">Save</button></td>
									
			</tr>				
		</table>
	</form>
</body>
</html>