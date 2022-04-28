<html>
<head>
 <title>Profil Anda</title>
<style>
    body {
    background-image: url("../bg.jpg");
    background-color: #000000;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;   
    }
</style>
</head>
<body>
    <center>
        <table border=5 bgcolor=black>
            <tr>
                <th colspan="3" bgcolor=white>
                    Profil Anda
                </th>
            </tr>
            <tr>
                <td colspan="3" bgcolor=white>
                    <hr>
                </td>
            </tr>
            <tr>
                <th bgcolor=white>NIM</th>
                <th bgcolor=white>:</th>
                <td bgcolor=white>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <th bgcolor=white>Nama</th>
                <th bgcolor=white>:</th>
                <td bgcolor=white>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th bgcolor=white>Kelas</th>
                <th bgcolor=white>:</th>
                <td bgcolor=white>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <th bgcolor=white>Tanggal Lahir</th>
                <th bgcolor=white>:</th>
                <td bgcolor=white>
                    <?= $tanggal; ?>
                </td>
            </tr>
            <tr>
                <th bgcolor=white>Alamat</th>
                <th bgcolor=white>:</th>
                <td bgcolor=white>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3"> <img src="../o.jpg" alt="opik" width=300 height=300></td>
            </tr>
            <tr>
                <td colspan="3" align="center" bgcolor=white>
                    <a href="<?= ('../profil'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
 </center>
</body>
</html>