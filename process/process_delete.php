<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

include 'koneksi.php'; // Sesuaikan dengan file koneksi Anda

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan proses penghapusan data dari database
    $query = "DELETE FROM nama_tabel WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    // Redirect kembali ke halaman dashboard setelah penghapusan
    header('Location: ' . BASE_URL . 'dashboard.php');
    exit();
}
