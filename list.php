<?php
    $user = "suzuki";
    $pass = "Ko062205";

    try {

        $dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM recipes";
        $stmt = $dbh->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);

        $dbh = null;
    } catch (Exception $e) {
        echo "エラー発生: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
     
        die(); #すべての処理を中止させる。
    }
?>