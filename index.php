<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restaurant</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Ayammy</h1>
            <div class="bungkus-gambar">
                <img src="1.jpg" alt="bakar" width="100" height="90">
                <img src="2.jpg" alt="pop" width="100" height="90">
                <img src="3.jpeg" alt="rica" width="100" height="90">
            </div>
        </header>
        <main>
            <form action="action.php" method="get">
                <label for="name">Pesanan Atas Nama</label>
                <input type="text" name="name" id="name">
                <label for="nohp">No Handphone</label>
                <input type="text" name="nohp" id="nohp">
                <label for="menu">Menu Yang Ingin Dipesan</label>
                <select name="makanan">
                    <option value="Ayam Bakar">Ayam Bakar</option>
                    <option value="Ayam Pop">Ayam Pop</option>
                    <option value="Ayam Rica">Ayam Rica</option>
                </select>
                <label for="jumlah">Jumlah Pesanan</label>
                <input type="number" name="jumlah" id="jumlah">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                <input type="submit" value="Submit" id="btn">
            </form>
        </main>
    </div>
</body>
</html>