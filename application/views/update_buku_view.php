<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
</head>

<body>
    <?php foreach ($buku as $b) { ?>
        <form action="<?php echo site_url('buku/update'); ?>" method="post">
            <table>
                <tr>
                    <td>Judul</td>
                    <td>
                        <input type="hidden" name="kd_buku" value="<?php echo $b->kd_buku ?>">
                        <input type="text" name="judul" value="<?php echo $b->judul ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><input type="text" name="pengarang" value="<?php echo $b->pengarang ?>"></td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td><input type="text" name="jenis" value="<?php echo $b->jenis ?>"></td>
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