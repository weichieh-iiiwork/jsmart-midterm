<!-- 重要程式碼 -->
<!-- 剛開始忘記連session會導致if isset session判斷失敗 -->
<?php 
session_start();
require_once './db.inc.php';
?>
<!-- 重要程式碼 -->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>JSMART</title>
</head>

<body>

    <?php require './templates/tpl-header.php' ?>

    <!-- 商品項目清單 -->
    <div class="bg-light p-3">
        <div class="container">
            <div class="row justify-content-between">
                <!-- 先開col-4 裡面再放row -->
                <!-- 先往裡面padding再放card -->
                <div class="col-6 col-md-4">
                    <div class="card mb-4">
                        <img src="https://fakeimg.pl/400x300/" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text mb-4">商品名稱</h4>
                            <div class="card-buttom d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-outline-secondary">詳細內容</button>
                                <small>上架時間</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card mb-4">
                        <img src="https://fakeimg.pl/400x300/" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text mb-4">商品名稱</h4>
                            <div class="card-buttom d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-outline-secondary">詳細內容</button>
                                <small>上架時間</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card mb-4">
                        <img src="https://fakeimg.pl/400x300/" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text mb-4">商品名稱</h4>
                            <div class="card-buttom d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-outline-secondary">詳細內容</button>
                                <small>上架時間</small>
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
        </div>
    </div>

    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

</body>

</html>