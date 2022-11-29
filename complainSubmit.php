<?php
include './conn.php';

if (isset($_POST['submit-complain'])){
        $uName = $_POST['uName'];
        $tName = $_POST['tName'];
        $position = $_POST['position'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `main`(`uName`, `tName`, `postion`, `description`) 
        VALUES   ('$uName', '$tName', '$position', '$description');";

        $upload = mysqli_query($db,$sql);
        if ($upload) 
        {
            echo "success";
        }
    }

    ?>