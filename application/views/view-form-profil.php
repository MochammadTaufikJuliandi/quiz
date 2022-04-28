<html>
<head>
    <title>Form Input Profil</title>
<style>
    body {
        background-image: url("p.jpg");
        background-color: #cccccc;
        background-position: center;
        background-size: cover;
    }
</style>
</head>
<body>
    <center>
        <form action="<?= ('profil/cetak'); ?>"
method="post">
             <table>
                <tr>
                    <th colspan="3" >
                        Isi Profil
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nim" id="nim">
                    </td>
                </tr>
                <?=form_error('nim'); ?>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <?=form_error('nama'); ?>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                    </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>    
                        <input type="text" name="tanggal" id="tanggal">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Lanjutkan">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>