<h3><?= $titleDaftarBarang ?></h3>

<form method="POST" action="<?= base_url('barang/tambah_barang') ?>">
    <input type="text" name="nama" class="form-control mb-2">
    <input type="number" name="harga" class="form-control mb-2">
    <input type="number" name="stok" class="form-control mb-2">
    <button class="btn btn-success">Tambah</button>
</form>

<hr>

<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Action</th>
    </tr>

    <?php foreach ($listBarang as $row): ?>
    <tr>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['harga'] ?></td>
        <td><?= $row['stok_barang'] ?></td>
        <td>
            <a href="<?= base_url('barang/edit_barang/'.$row['id']) ?>">Edit</a>
            <a href="<?= base_url('barang/hapus_barang/'.$row['id']) ?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>