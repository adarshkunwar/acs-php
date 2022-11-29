<?php
    include './conn.php';

    if (isset($_POST['submit-complain'])){
        $uName = $_POST['uName'];
        $tName = $_POST['tName'];
        $position = $_POST['position'];
        $description = $_POST['description'];

        if($uName!="" || $tName!="" || $position!="" || $description!=""){

            
            $sqlComplain = "INSERT INTO `main`(`uName`, `tName`, `postion`, `description`) 
        VALUES ('$uName', '$tName', '$position', '$description');";
        $upload = mysqli_query($db, $sqlComplain);
        
        if($upload) {
            echo"<h1> success </h1>";
        }else{
            echo"<h3> failure </h3>";
        }
    }
    else{
        echo("one or more table empty");
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./output.css">

</head>
<body class="w-screen h-screen bg-blue-300 flex justify-center items-center">
    <form action="complain.php" method="POST">
        <div class="text-xl flex-col space-y-2">
            <div class="flex border-2 px-3">
                <label for="uName">Enter your name</label>
                <input type="text" name="uName" id="uName" class="w-96 bg-transparent">
            </div>
            <div class="flex border-2 px-3">
                <label for="tName">Enter the name of your target</label>
                <input type="text" name="tName" id="tName" class="w-96 bg-transparent">
            </div>
            <div class="flex border-2 px-3">
                <label for="position">What position did he abuse?</label>
                <input type="text" name="position" id="position" class="bg-transparent">
            </div>
            <div class="flex border-2 px-3">
                <label for="description">Describe the incident</label>
                <input type="text" name="description" id="description" class="border-2">
            </div>
            <button type="submit" name="submit-complain" class="px-3 pb-10 border-2 bg-teal-500">Click me</button>
        </div>
    </form>
</body>
</html>