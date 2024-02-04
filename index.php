<?php include 'config/koneksi.php'; ?>
<?php include 'template/header.php'; ?>

<?php
if (!isset($_GET['page'])) {
    include 'main/beranda.php';
} else {
    $page = $_GET['page'];
    include 'main/' . $page . '.php';
}
?>

<?php include 'template/footer.php'; ?>