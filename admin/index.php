<?php
ob_start();
session_start();

include "../config/koneksi.php";

if (!$_SESSION['user']) {
  header("location: login.php");
}


require_once "template/header.php";

?>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <?php

    if (isset($_GET['page'])) {
      $page = $_GET['page'];

      switch ($page) {
        case 'home':
          include "dashboard/index.php";
          break;

        case 'tampil-program':
          include "program/data-program.php";
          break;

        case 'tambah-program':
          include "program/tambah-program.php";
          break;

        case 'hapus-program':
          include "program/hapus-program.php";
          break;

        case 'edit-program':
          include "program/edit-program.php";
          break;

        case 'tampil-berita':
          include "berita/data-berita.php";
          break;

        case 'tambah-berita':
          include "berita/tambah-berita.php";
          break;

        case 'hapus-berita':
          include "berita/hapus-berita.php";
          break;

        case 'edit-berita':
          include "berita/edit-berita.php";
          break;

        case 'penduduk':
          include "penduduk/index.php";
          break;

        case 'fasilitas':
          include "fasilitas/index.php";
          break;

        case 'hapus-fasilitas':
          include "fasilitas/hapus-fasilitas.php";
          break;

        case 'struktur-organisasi':
          include "struktur/index.php";
          break;

        case 'user':
          include "akun/index.php";
          break;


        default:
          echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
          break;
      }
    } else {
      require_once "dashboard/index.php";
    }

    ?>

    </div>
    <!-- /. New Row -->
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php

include_once "template/footer.php";

?>