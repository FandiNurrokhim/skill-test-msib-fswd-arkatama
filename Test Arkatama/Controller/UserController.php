<?php

include "../Model/UserModel.php";

$user = new User();

$inputData = htmlspecialchars($_POST['inputData']);
$dataParts = explode(" ", $inputData);

$nama = implode(" ", array_slice($dataParts, 0, 2));
$usia = $dataParts[2];
$kota = implode(" ", array_slice($dataParts, 3));

$data = array(
    'nama' => $nama,
    'usia' => $usia,
    'kota' => $kota
);

if ($user->saveData($data)) {
    header("Location: ../View/index.php");
} else {
    $error = "Gagal Menambah Data";
}
