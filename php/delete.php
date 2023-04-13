<?php
include "../connection/conn.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];


    $sql = $pdo->prepare("DELETE FROM client WHERE id = :id");
    $sql->bindValue(":id", $id);
    if ($result = $sql->execute()) {
        header("location:../php/index.php");
    } else {
        header("location:../php/index.php");
        die;
    }
}
