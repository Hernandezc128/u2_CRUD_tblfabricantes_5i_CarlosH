<?php
include("config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $nom_fab = $_POST['edit_nombre'];
    $direccion = $_POST['edit_direccion'];
    $telef = $_POST['edit_telefono'];
    $email = $_POST['edit_email'];
    $fecha = $_POST['edit_fecha'];
    $estado = $_POST['edit_estado'];
    $coment = $_POST['edit_comentarios'];



    // query
    $sql = "UPDATE fabricantes SET nom_fab='$nom_fab', direcc='$direccion', tel='$telef', email='$email', fecha_reg='$fecha', estad='$estado', coment='$coment' WHERE id_fab = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
