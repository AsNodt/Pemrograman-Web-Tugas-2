<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Sukses</title>
  </head>
  <body>
    <header>
      <h1>Info Pemesanan</h1>
    </header>
    <main>
      <article class="container">
        <table>
          <tr>
            <th>Nama Pemesan</th>
            <th>:</th>
            <td><?= $_GET['name']?></td>
          </tr>
          <tr>
            <th>Makanan</th>
            <th>:</th>
            <td><?= $_GET['makanan']?></td>
          </tr>
          <tr>
            <th>Jumlah Pesanan</th>
            <th>:</th>
            <td><?= $_GET['jumlah']?></td>
          </tr>
          <tr>
            <th>Alamat</th>
            <th>:</th>
            <td><?= $_GET['alamat']?></td>
          </tr>
        </table>
      </article>
    </main>
  </body>
</html>
