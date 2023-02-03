<?php
include("koneksi.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM data_ms WHERE id=$id");

header("Location:data.php");
?>