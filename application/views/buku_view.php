<html>

<head>
    <title>Data Buku</title>
</head>

<body>
    <legend>Data Buku</legend>
    <table width="40%" border="1">
        <thead>
            <tr>
                <td>No.</td>
                <td>Kode Buku</td>
                <td>Judul</td>
                <td>Pengarang</td>
                <td>Jenis</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php $no = 0;
        foreach ($buku as $row) :
            $no++; ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $row->kd_buku; ?>
                </td>
                <td>
                    <?php echo $row->judul; ?>
                </td>
                <td>
                    <?php echo $row->pengarang; ?>
                </td>
                <td>
                    <?php echo $row->jenis; ?>
                </td>
                <td>
                    <a href="<?= base_url('index.php/Buku/delete/' . $row->kd_buku); ?>">Hapus</a>
                    <a href="<?= base_url('index.php/buku/edit/' . $row->kd_buku); ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </Table>
    <form method="post" action="<?php echo site_url('buku/addData'); ?>">  
        <table>  
            <tr>  
                <td>Kode Buku</td>  
                <td>:</td>  
                <td><input type="text" name="kd_buku"></td>  
            </tr>  
            <tr>  
                <td>Judul</td>  
                <td>:</td>  
                <td><input type="text" name="judul"></td>  
            </tr>  
            <tr>  
                <td>Pengarang</td>  
                <td>:</td>  
                <td><input type="text" name="pengarang"></td>  
            </tr>  
            <tr>  
                <td>Jenis</td>  
                <td>:</td>  
                <td><input type="text" name="jenis"></td>  
            </tr><br><br>  
            <tr>  
            <td colspan="3"><input type="submit" name="submit" value="Tambah"></td>  
            </tr>  
        </table>  
    </form>  
</body>

</html>