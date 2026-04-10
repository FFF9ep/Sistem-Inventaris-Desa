<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h1>Welcome To Landing Page Inventaris Desa</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, 
        explicabo cupiditate aliquam ab neque est. 
        Corporis illum tempora quos? Debitis provident temporibus 
        accusantium vitae voluptatum culpa tempore rerum dolor accusamus.
    </p>
    <p>
        Pencipta : <?=$pencipta?> <br />
        Ketua Tim : <?=$ketua_tim?>
    </p>
    <br>

    <h3>
        Buku Tamu:
    </h3>
    <form method="POST" action="<?= base_url('landing_page/tambah_buku_tamu') ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td colspan='3'>
                    <textarea name="komentar">Tulis Komentar Anda</textarea>
                </td>
            </tr>
            <tr colspan='3'>
                <td>
                    <button>Kirim</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>