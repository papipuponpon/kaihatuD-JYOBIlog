<?php 
    require_once 'db_connect.php';
    if(isset($_GET['id'])) {
     $id = $_GET['id'];
     $sql = "select * from blog where id = ".$id;
     $stm = $pdo->prepare($sql);
     //sql実行してる
     $stm-> execute();
     $result = $stm->fetch(PDO::FETCH_ASSOC);
     var_dump($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $result['title']; ?></h1>
    <h2><?php echo $result['article']; ?></h2>
    <a href="index.php">一覧に戻る</a>
</body>
</html>