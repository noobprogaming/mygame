<?php

include '../koneksi.php';
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM game WHERE name_game LIKE ?";
    
    if($stmt = mysqli_prepare($koneksi, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = '%' . $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<a href='". $row["id_game"] .".php?id=".$row["id_game"]."'><p>" . $row["name_game"] . "</p></a>";
                    $id_game=$row["id_game"];
                }
            } else{
                echo "<p>Tidak ditemukan . .</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($koneksi);
?>