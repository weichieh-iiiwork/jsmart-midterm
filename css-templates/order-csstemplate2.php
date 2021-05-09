<?php
session_start();
require_once '../db.inc.php';
require_once '../templates/tpl-header.php';
?>

<!-- order.php -->
<div class="container mt-5">
    <table id="contentTable" class="table table-hover" >
        <thead>
            <tr class="justify-content-center text-center">
                <td style="width: 80px;">訂單編號</td>
                <td style="width: 190px;">成立時間</td>
                <td style="width: 270px;">商品名稱</td>
                <td style="width: 80px;">價格</td>
                <td style="width: 80px;">數量</td>
                <td style="width: 100px;">小計</td>
                <td style="width: 100px;">總金額</td>
            </tr>
        </thead>
        <tbody>
            <tr class=" text-center">
                <td  rowspan="2">訂單編號</td>
                <td  rowspan="2">成立時間</td>
                <td >商品名稱</td>
                <td >價格</td>
                <td >數量</td>
                <td >小計</td>
                <td  rowspan="2">總金額</td>
            </tr>
            <tr class=" text-center">
                
                <td>商品名稱</td>
                <td>價格</td>
                <td>數量</td>
                <td>小計</td>
                
            </tr>
        </tbody>

    </table>

</div>


<?php
require_once '../templates/tpl-footer.php';
?>