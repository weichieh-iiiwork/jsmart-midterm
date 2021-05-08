<?php 
session_start();
require_once './db.inc.php';
require './templates/tpl-header.php'
?>

<!-- 商品詳細頁面 -->
<div class="wrap border d-flex mx-auto mt-5" style="width: 42rem;">
    <div class="col">
        <img src="./kidaha-01.svg" class="itemImg" alt="...">
    </div>
    <div class="col">
        <div>
            <h5 class="card-title mt-5">itemName</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p>價格:</p>
        </div>
        
        <form name="cartForm" id="cartForm" method="POST" action="./addCart.php">
            <div class="qty mt-5 mb-3">
                數量: <input type="number" name="cartQty" value="1" maxlength="5" min="1" max="<?php echo $arrItem["itemQty"] ?>">
                <input type="hidden" name="itemId" value="<?php echo (int)$_GET['itemId'] ?>">

            </div>
            <div class="mx-auto d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" name="smb" value="加入購物車">
            </div>
        
        </form>
        
    </div>
</div>

<?php
require_once './templates/tpl-footer.php';
?>
