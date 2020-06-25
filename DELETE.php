<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'nroot';
$password = 'nmorijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_SET["id"];

    $sql = "DELETE user where id = id";
    $stmt = $dbh->prepare($sql);
    $params = array('id' => $id);
    $stmt ->execute($params);

    header('location: index.php?flg-1');

    echo "接続成功\n";
} catch (PDOException $e) {
    //echo "接続失敗: " . $e->getMessage() . "\n";
    header('location: index.php?flg-0' . $e->getMessage());
    exit();
}
?>