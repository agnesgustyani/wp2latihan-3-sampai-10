<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
</head>

<body>
    <?php foreach ($mahasiswa as $m) { ?>
        <form action="<?php echo site_url('mahasiswa/update'); ?>" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="nim" value="<?php echo $m->nim ?>">
                        <input type="text" name="nama" value="<?php echo $m->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $m->jurusan ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $m->alamat ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"> <button onclick="<?php base_url() ?>">Batal</button></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>