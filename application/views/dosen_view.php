<html>

<head>
    <title>Data Dosen</title>
</head>

<body>
    <legend>Data Dosen</legend>
    <table width="40%" border="1">
        <thead>
            <tr>
                <td>No.</td>
                <td>NIP</td>
                <td>Nama Dosen</td>
                <td>Bidang</td>
                <td>Telepon</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php $no = 0;
        foreach ($dosen as $row) :
            $no++; ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $row->nip; ?>
                </td>
                <td>
                    <?php echo $row->nama_dosen; ?>
                </td>
                <td>
                    <?php echo $row->bidang; ?>
                </td>
                <td>
                    <?php echo $row->telp; ?>
                </td>
                <td>
                    <a href="<?= base_url('index.php/dosen/delete/' . $row->nip); ?>">Hapus</a>
                    <a href="<?= base_url('index.php/dosen/edit/' . $row->nip); ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </Table>
    <form method="post" action="<?php echo site_url('dosen/addData'); ?>">  
        <table>  
            <tr>  
                <td>NIP</td>  
                <td>:</td>  
                <td><input type="text" name="nip"></td>  
            </tr>  
            <tr>  
                <td>Nama Dosen</td>  
                <td>:</td>  
                <td><input type="text" name="nama_dosen"></td>  
            </tr>  
            <tr>  
                <td>Bidang</td>  
                <td>:</td>  
                <td><input type="text" name="bidang"></td>  
            </tr>  
            <tr>  
                <td>Telepon</td>  
                <td>:</td>  
                <td><input type="text" name="telp"></td>  
            </tr><br><br>  
            <tr>  
            <td colspan="3"><input type="submit" name="submit" value="Tambah"></td>  
            </tr>  
        </table>  
    </form>  
</body>

</html>