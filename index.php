<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jehansyah Rental</title>
</head>

<body>
<header>
    <h1>Tabel Data Sewa Mobil</h1>
</header>
    <div class="header">
        <div class="main"></div>
    </div>
        <h2>Tabel Mobil</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Mobil</th>
                    <th>Type Mobil/th>
                    <th>Warna Mobil</th>
                    <th>Harga Sewa</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM mobil';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_mobil']?></td>
                        <td><?php echo $row['type_mobil']?></td>
                        <td><?php echo $row['warna_mobil']?></td>
                        <td><?php echo $row['harga_sewa']?></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
        </table>
        
        <h2>Tabel Penyewa</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Penyewa</th>
                    <th>Nama Penyewa</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM penyewa';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['id_penyewa']?></td>
                        <td><?php echo $row['nama_penyewa']?></td>
                        <td><?php echo $row['no_telepon']?></td>
                        <td><?php echo $row['alamat']?></td>
                    </tr>
                </tbody>
                <?php
            }   
            ?>            
        </table>
    
        <h2>Tabel Transaksi</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID Mobil</th>
                    <th>ID Penyewa</th>
                    <th>Lama Sewa</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM transaksi';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_trs']?></td>
                        <td><?php echo $row['id_mobil']?></td>
                        <td><?php echo $row['id_penyewa']?></td>
                        <td><?php echo $row['lama_sewa']?></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>
        </table>

        <h2>Tabel Pembayaran</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>ID Transaksi</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Total Pembayaran</th>
                </tr>
            </thead>
            <?php 
            include 'koneksi.php';
            $sql = 'SELECT * FROM pembayaran';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_bayar']?></td>
                        <td><?php echo $row['id_trs']?></td>
                        <td><?php echo $row['tanggal_bayar']?></td>
                        <td><?php echo $row['jumlah_bayar']?></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>        
        
        </table>
        <br>
        <br>
    <footer>
        <p>&copy; 2021 - Universitas pelita bangsa Fakultas Teknik Informatika</p>
    </footer
</body>    
</html>