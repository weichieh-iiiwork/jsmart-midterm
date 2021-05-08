<?php
session_start();
require_once './db.inc.php';
require_once './templates/tpl-header.php';
?>

<!-- myCart.php -->

<div class="container mt-5">
    <table class="table table-hover">
        <thead>
            <tr class="row justify-content-center text-center">
                <td class="col-4">商品名稱</td>
                <td class="col-2">價格</td>
                <td class="col-2">數量</td>
                <td class="col-2">小計</td>
                <td class="col-1">功能</td>
            </tr>
        </thead>
        <tbody>
            <tr class="row justify-content-center text-center">
                <td class="col-4 ">
                        <div class="d-flex">
                            <img class="img-fluid rounded shadow-sm" width="70" src="./kidaha-01.svg" alt="">
                            <div>
                                <h5>滿月柔棉 夜用薄型衛生棉 9片</h5>
                                <span>Category</span>
                            </div>
                        </div>
                    </td>
                <td class="col-2">NT$ 60</td>
                <td class="col-2">2</td>
                <td class="col-2">120</td>
                <td class="col-1">
                    <a href="./deleteCart.php?idx=<?php echo $i ?>" class="text-dark">刪除</a>
                </td>
            </tr>
        </tbody>

    </table>

</div>

<?php
require_once './templates/tpl-footer.php';
?>