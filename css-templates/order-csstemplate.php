<?php
session_start();
require_once './db.inc.php';
require_once './templates/tpl-header.php';
?>

<!-- order.php -->
<div class="container mt-5">
    <table class="table table-hover">
        <thead>
            <tr class="row justify-content-center text-center">
                <td class="col-1">訂單編號</td>
                <td class="col-2">成立時間</td>
                <td class="col-2">商品名稱</td>
                <td class="col-2">價格</td>
                <td class="col-1">數量</td>
                <td class="col-2">小計</td>
                <td class="col-2">總金額</td>
            </tr>
        </thead>
        <tbody>
            <tr class="row justify-content-center text-center">
            <td class="col-1">訂單編號</td>
                <td class="col-2">成立時間</td>
                <td class="col-2">商品名稱</td>
                <td class="col-2">價格</td>
                <td class="col-1">數量</td>
                <td class="col-2">小計</td>
                <td class="col-2">總金額</td>
            </tr>
        </tbody>

    </table>

</div>


<?php
require_once './templates/tpl-footer.php';
?>