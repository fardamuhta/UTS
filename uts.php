<html>
    <head>
        <title> pantauan covid 19 </title>
    </head>
    <body>
        <center>
            <h1>
                <?php
                $Sekarang = getdate();
                $bulan = $Sekarang['month'];
                $hari = $Sekarang ['mday'];
                $tahun = $Sekarang ['year'];
                $jam = $Sekarang ['hours'];
                ?>
            </h1>
            <h2> Data Pemantaun Covid19 wilayah <select name="test">
                <form action="action.php"  method="POST">
	        <option value="1">DKI Jakarta</option>
	        <option value="2">Jawa Barat</option>
	        <option value="3">Banten</option>
	        <option value="4">Jawa Tengah</option>
            </select> </h2>
            
        </form>
            <a href="insert.php">Tambah Data</a>
            <h3> Per <?php date_default_timezone_set('Asia/Jakarta');
            echo date("d F Y H:i:s");
            ?></h3>
            <h4>
                Farda Muhtadillah 191011401067
            </h4>
            <table border="1">
            <thead>
                <tr>
                <th>Nomor</th>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                </tr>
                </thead>
                <tbody>
                <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from pasien");
    $no=1;
    foreach ($mahasiswa as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['positif']."</td>
            <td>".$row['dirawat']."</td>
            <td>".$row['sembuh']."</td>
            <td>".$row['meninggal']."</td>
              </tr>";
        $no++;
    }
    ?>
            </tbody>

            </table>
            
                
            
        </center>
    </body>
</html>