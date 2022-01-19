<? 
    require __DIR__."/conn/mysqlConn.php";
    $title = $_POST["title"];
    $description = $_POST["description"];
    
    $query = "INSERT INTO post (title, description) VALUES ('".$title."', '".$description."');";
    $result = mysqli_query(conn(), $query);
    
    if ($result === false) {
        echo '{"message": "error"}';
        return;
    }
    
    echo '{"message": "success"}';
?>