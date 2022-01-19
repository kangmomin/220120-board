<?
    require __DIR__."./mysqlConn.php";
    $query = "SELECT * FROM post;";
    $rows = mysqli_query(conn(), $query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./index.css" type="text/css" rel="stylesheet">
    <title>board</title>
</head>
<body>
    <header>
        <div id="logoArea">
            <a href="/board">
                <img 
                    src="https://cdn.logo.com/hotlink-ok/logo-social-sq.png"
                    alt="logo"
                    id="logo"/>
            </a>
        </div>
    </header>
    
    <div id="container">
        <div id="mainContent">
            <? while($data = mysqli_fetch_array($rows)) {?>
            <a href="/board/<? echo $data["id"] ?>" class="post">
                <div class="id"><? echo $data["id"] ?></div>
                <div class="title"><? echo $data["title"] ?></div>
                <div class="created"><? echo $data["title"] ?></div>
            </a>
            <? } ?>
        </div>
    </div>
</body>
</html>