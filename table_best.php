<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
  <link rel="stylesheet" href="style.css">

<!-- link fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- link iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

<!-- link googlefont -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Montserrat:wght@400;700&family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <!-- SIDEBAR -->
    <div class="sidebar">
      <div class="dashboard">
          <i class="fa-solid fa-circle-user fa-2x"></i>
          <h2>ADMIN</h2>
      </div>

      <div class="list_menu">
        <ul>
          <li><iconify-icon icon="ic:baseline-cake" style="color: white; margin-left: 40px;" width="20" height="20">h</iconify-icon><a href="table_regular.php">REGULAR CAKE</a></li>
          <li><iconify-icon icon="cib:cakephp" style="color: #ffff; margin-left: 40px;" width="20" height="20"></iconify-icon><a href="table_mousse.php">MOUSSE CAKE</a></li>
          <li><iconify-icon icon="wpf:wedding-cake" style="color: white; margin-left: 40px;" width="20" height="20"></iconify-icon><a href="table_tart.php">TART</a></li>
          <li><iconify-icon icon="emojione-monotone:birthday-cake" style="color: white; margin-left: 40px;" width="20" height="20"></iconify-icon><a href="table_best.php">BEST SELLER</a></li>
          </ul>
      </div>
    </div>
    <!-- CONTENT-TABLE -->

    <div class="judul-content">
        <div class="judul">
            <p>Best Seller</p>
        </div>
        <div class="content">
        <a style="width: fit-content;" href="tambahbest.html"><button class="btn">Tambah</button></a>
        <div class="table_konten">
            <table>
                <thead>
                    <tr>
                        <th>ID Kue</th>
                        <th>Nama Kue</th>
                        <th>Foto Kue</th>
                        <th>Harga Kue</th>
                        <th>Detail Kue</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    $sql = "SELECT * from promo";
                    $query = mysqli_query($koneksi, $sql);

                    while ($best = mysqli_fetch_array($query)) {
                    echo"
                    <tbody>
                        <tr>
                            <td>$best[id_kue]</td>
                            <td style='width: 200px;'>$best[nama_kue]</td>
                            <td class='img'><img class='gambar' src='foto/$best[2]'></td>
                            <td>$best[harga_kue]</td>
                            <td class='detail'>$best[detail_kue]</td>
                            <td>
                                <a href='formedit_best.php?id_kue=".$best['id_kue']."'><button class='btn-edit'><i class='fa-solid fa-pen-to-square fa'></i></button></a>
                                <a href='hapus_best.php?id_kue=".$best['id_kue']."' onClick=\"return confirm('Yakin akan menghapus data?');\"><button class='btn-hapus'><i class='fa-sharp fa-solid fa-trash'></button></i></a>
                            </td>
                        <tr>
                    <tbody>";
                    }
                ?>
            <table>
        <div>
    </div>
    
</body>
</html>