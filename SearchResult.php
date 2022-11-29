<?php 

$db= mysqli_connect("localhost","root","","acs-new");
if (!$db) {
    echo "yo!! connection problem with the database.";
}

                    $search = $_POST['search'];
                    $conn = mysqli_query($db, "SELECT * FROM main WHERE tName LIKE '%$search%'");
                
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
                            echo "<div></div>";
                            echo "<tr>";
                            echo"<td>$id </td>";
                            echo"<td>$uName </td>";
                            echo"<td>$tName </td>";
                            echo"<td>$description </td>";
                            echo "</tr>";
                        }
                    } 
                ?>