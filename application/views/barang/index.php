<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    <h1><?= $titleTambahBarang ?></h1>
    <form action="<?= base_url('barang/tambah_barang') ?>" method="post">
        <input type="text" name="nama" placeholder="tambah nama barang"><br>
        <input type="text" name="harga" placeholder="tambah harga barang"><br>
        <input type="text" name="stok" placeholder="tambah stok barang"><br>
        <button>Tambah Barang</button>
    </form>
    <h1><?= $titleDaftarBarang ?></h1>

    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Action</td>
    </tr>

    <?php foreach ($listBarang as $row) { ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['stok_barang'] ?></td>
            <td>
                <a href="<?= base_url('barang/edit_barang/'.$row['id']) ?>">Edit</a>
                <a href="<?= base_url('barang/hapus_barang/'.$row['id']) ?>">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>