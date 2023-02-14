<?php
    //データベースに接続する準備
    //ユーザー名
    $user = "root";
    //パスワード
    $pass = "";
    //データベース名
    $database = "jyobilog";
    //サーバー名
    $server = "localhost:3306";
    //DSN文字列の生成
    $dsn = "mysql:host={$server};dbname={$database};charset=utf8";
    try{
        //PDOクラスのインスタンスを作成してDBに接続する
        $pdo = new PDO($dsn, $user, $pass);
        //プリペアドステートメントのエミュレーションを無効化
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        //例外がスローされるようになる
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "データベースに接続しました";
    } catch(Exception $e){
        echo "DB接続エラー:";
        echo $e->getMessage();
        exit();
    }
?>