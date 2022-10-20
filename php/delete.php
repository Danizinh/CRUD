<?php
include "../connection/conn.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];


        $sql = "DELETE FROM client WHERE id=$id";
        $conn->query($sql);

        header("location:../php/index.php");
        exit;
    }
?>