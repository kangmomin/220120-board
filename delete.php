<?
    require __DIR__."/conn/mysqlConn.php";
    
    $id = $_GET["id"];
    $query = "DELETE post WHERE id=".$id;
    
    $result = mysqli_query(conn(), $query);
    
    if ($result === false) {
        echo '{
            "message" : "error"
        }';
        return;
    }
    
    echo '{
        "message" : "success"
    }'
?>