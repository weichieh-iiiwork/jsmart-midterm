<!-- 單純買家的版本 -->
<?php
session_start();
require_once './db.inc.php';

$objResponse['success'] = false;
$objResponse['info'] = "登入失敗";

// if( isset($_POST['username']) && isset($_POST['pwd']) ){
//     $sql = "SELECT `username`, `pwd`, `userName`
//     FROM `users`
//     WHERE `username` = ?
//     AND `pwd` = ?";

//     $arrParam = [
//         $_POST['username'],
//         sha1($_POST['pwd'])
//     ];

//     $stmt = $pdo->prepare($sql);
//     $stmt->execute($arrParam);

//     if( $stmt->rowCount() > 0){
//         $arr = $stmt->fetchAll()[0];
//         header("Refresh: 5; url=./index.php");

//         $_SESSION['username'] = $arr['username'];
//         // $_SESSION['userName'] = $arr['userName'];

//         $objResponse['success'] = true;
//         $objResponse['info'] = "登入成功";
//         echo json_encode($objResponse,JSON_UNESCAPED_UNICODE);
//         exit();
//     } 
// } else {
//     $objResponse['info'] = "請確實登入";

// }

if (isset($_POST['userAccount']) && isset($_POST['userPassword'])) {
    $sql = "SELECT `userAccount`, `userPassword`, `userName`
    FROM `users`
    WHERE `userAccount` = ?
    AND `userPassword` = ?";

    $arrParam = [
        $_POST['userAccount'],
        sha1($_POST['userPassword'])
    ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($arrParam);

    if ($stmt->rowCount() > 0) {
        $arr = $stmt->fetchAll()[0];
        header("Refresh: 5; url=./index.php");

        $_SESSION['userAccount'] = $arr['userAccount'];
        // $_SESSION['userName'] = $arr['userName'];

        $objResponse['success'] = true;
        $objResponse['info'] = "登入成功";
        echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);
        exit();
    }
} else {
    $objResponse['info'] = "請確實登入";
}

header("Refresh: 5; url=./index.php");
echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);
