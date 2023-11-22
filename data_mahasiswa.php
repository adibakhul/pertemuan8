<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html leng="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Data Mahasiswa</h2>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Kelamin</td>
                <td>Agama</td>
                <td>Asal Sekolah</td>
                <td>Aksi</td>
            </tr>
            <?php
                $no =1;
                $query = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no ++;?></td>
                <td><?php echo $data ['nama'];?></td>
                <td><?php echo $data ['alamat'];?></td>
                <td><?php echo $data ['kelamin'];?></td>
                <td><?php echo $data ['agama'];?></td>
                <td><?php echo $data ['asal_sekolah'];?></td>
                <td>
                    <a href="">Edit</a> <a href="">Hapus</a>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </body>
</html>