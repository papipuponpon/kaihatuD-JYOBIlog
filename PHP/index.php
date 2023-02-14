<?php
    require_once 'db_connect.php';
    $sql = "select * from blog where public = 1 and delete_flag = 0";
    $stm = $pdo->prepare($sql);
    $stm-> execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    var_dump($result);
    echo "<pre>";
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
    <?php foreach($result as $r) : ?>
        <a href="Article.php?id=<?php echo $r['id']; ?>"><?php echo $r['title'];?><br></a>
    <?php endforeach; ?>
</body>
</html>