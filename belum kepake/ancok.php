<?php
try {
    // Try Connect to the DB with new MySqli object - Params {hostname, userid, password, dbname}
    $mysqli = new mysqli("localhost", "root", "", "my_game");
    $statement = $mysqli->prepare("SELECT * FROM user");
    $statement->execute(); // Execute the statement.
    $result = $statement->get_result(); // Binds the last executed statement as a result.
    while ($row = $result->fetch_assoc()) {
        $json[] = $row;
    }
    $data['data'] = $json;
    $data['total'] = mysqli_num_rows($result);
    //echo json_encode($data, JSON_PRETTY_PRINT);


    //encode back to json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('members.json', $data);
} catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
    echo "MySQLi Error Code: " . $e->getCode() . "<br />";
    echo "Exception Msg: " . $e->getMessage();
    exit(); // exit and close connection.
}

$mysqli->close(); // finally, close the connection

?>