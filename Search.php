<?php 
$db= mysqli_connect("localhost","root","","acs-new");
if (!$db) {
    echo "yo!! connection problem with the database.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Document</title>
</head>
<body>
    <div class="w-screen h-screen flex items-center justify-center bg-blue-300 text-center">
        <div>
            <div class="flex">
                <form action="SearchResult.php" method="POST">
                    <input type="text" name="search" id="searchText" class="w-96 px-5 py-1 rounded-l-2xl focus:outline-none">
                    <button type="submit" class="bg-yellow-400 px-5 py-1 rounded-r-2xl">search</button>
                </form>
            </div>

            <div class="result">
                
            </div>
        </div>


    </div>
</body>
</html>