<h1>Edit Barang</h1>

<form action="<?= base_url('barang/proses_edit_barang') ?>" method="post">
    <input type="hidden" name="id" value="<?= $barang['id'] ?>">

    <input type="text" name="nama" value="<?= $barang['nama'] ?>"><br>
    <input type="text" name="harga" value="<?= $barang['harga'] ?>"><br>
    <input type="text" name="stok" value="<?= $barang['stok_barang'] ?>"><br>

    <button>Update</button>
</form>