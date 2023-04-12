<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
</head>

<body>
    <?php foreach ($dosen as $dos) { ?>
        <form action="<?php echo site_url('dosen/update'); ?>" method="post">
            <table>
                <tr>
                    <td>Nama Dosen</td>
                    <td>
                        <input type="hidden" name="nip" value="<?php echo $dos->nip ?>">
                        <input type="text" name="nama_dosen" value="<?php echo $dos->nama_dosen ?>">
                    </td>
                </tr>
                <tr>
                    <td>Bidang</td>
                    <td><input type="text" name="bidang" value="<?php echo $dos->bidang ?>"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telp" value="<?php echo $dos->telp ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"> <button onclick="<?php base_url() ?>">Batal</button></td>
                </tr>
            </table>
        </form>
    <?php }; ?>
</body>

</html>