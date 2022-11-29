<?php
$db= mysqli_connect("localhost","root","","acs-new");
if (!$db) {
    echo "yo!! connection problem with the database.";
}else{
    $conn = mysqli_query($db, "SELECT * FROM main ");
	
	

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti Corruption System</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>

<a href="search.php">search</a>
    <div class="text-xl text-red-600 border-2 w-screen h-screen">
        <div>
            <table>
                <tr>
                    <th>id</th>
                    <th>userName</th>
                    <th>targetName</th>
                    <th>description</th>
                </tr>
                 <?php
                    if(mysqli_num_rows($conn) > 0)
	                {
	                	while($row = mysqli_fetch_array($conn))
		                {
                            $id = $row['id'];
                            $uName = $row['uName'];
                            $tName = $row['tName'];
                            $description = $row['description'];
                            // echo("user Name is" . $uName);
                            // echo("<br/> target Name is" . $tName);
                            echo "<tr>";
                            echo"<td>$id </td>";
                            echo"<td>$uName </td>";
                            echo"<td>$tName </td>";
                            echo"<td>$description </td>";
                            echo "</tr>";
                        }
                    }                    
                ?>
            </table>
        </div>
    </div>
</body>
</html>