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
        <?php
            $sqlOrder = "SELECT `orderId`,`created_at`
            FROM `orders` 
            WHERE `username` = ? 
            ORDER BY `orderId` DESC";
            $stmtOrder = $pdo->prepare($sqlOrder);
            $stmtOrder->execute([$_SESSION['userAccount']]);

            if($stmtOrder->rowCount() > 0){
                $arrOrders = $stmtOrder->fetchAll();
                for($i=0; $i<count($arrOrders); $i++){
                ?>
                <tr class="row justify-content-center text-center">
                    <td class="col-1" rowspan=""><?php echo $arrOrders[$i]["orderId"] ?></td>
                    <td class="col-2"><?php echo $arrOrders[$i]['created_at'] ?></td>
                    
                    <?php
                        $sqlOrderItems = "SELECT `order_items`.`checkPrice`,
                        `order_items`.`checkQty`,
                        `order_items`.`checkSubtotal`,
                        `items`.`itemName`,
                        `categories`.`categoryName`
                        FROM `order_items` 
                        INNER JOIN `items`
                        ON `order_items`.`orderItemsId` = `items`.`itemId`
                        INNER JOIN `categories` 
                        ON `items`.`itemCategoryId` = `categories`.`categoryId`
                        WHERE `order_items`.`orderId` = ? 
                        ORDER BY `order_items`.`id` ASC";
                        $stmtOrderItems = $pdo->prepare($sqlOrderItems);
                        $arrParamOrderItems = [
                            $arrOrders[$i]['orderId']
                        ];
                        $stmtOrderItems->execute($arrParamOrderItems);
                        if($stmtOrderItems->rowCount() > 0){
                            $arrOrderItems = $stmtOrderItems->fetchAll();
                            for($j=0; $j<count($arrOrderItems); $j++){
                            ?>
                                
                                <td class="col-2">名稱<?php echo $arrOrderItems[$j]["itemName"] ?></td>
                                <td class="col-2">價格<?php echo $arrOrderItems[$j]["checkPrice"] ?></td>
                                <td class="col-1">數量<?php echo $arrOrderItems[$j]["checkQty"] ?></td>
                                <td class="col-2">小計<?php echo $arrOrderItems[$j]["checkSubtotal"] ?></td>
                                <td class="col-2">總金額</td>
                                
                                
                            <?php
                            }
                        }
                    ?>
             
                </tr>
                <?php   
                }
            }
        ?>
        </tbody>
    </table>

</div>


<?php
require_once './templates/tpl-footer.php';
?>