<h1>KASIR SEDERHANA</h1>

<form method="POST" action="<?= base_url('belanja/inputBelanja') ?>">
    <input type="text" name="nama" placeholder="nama barang"><br>
    <input type="number" name="harga" placeholder="harga barang"><br>
    <input type="number" name="jumlah" placeholder="jumlah beli"><br>
    <button>BELANJA</button>
</form>
