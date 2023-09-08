<?php
include "connection.php";
$query = "DELETE FROM tb_pet WHERE pet_id = '$_GET[id]'";

$delete = mysqli_query($mysqli, $query);

header("Location:index.php");
?>
