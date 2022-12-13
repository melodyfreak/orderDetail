<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'orderdetail');
mysqli_set_charset($link, "utf8");
if (!$link) {
    exit('Connection error');
}
$a = array('1',2,'22');
$b = [1];
foreach ($b as $item) {

}
$order_id = $_POST['orderId'];

$order_Info_SQL = mysqli_query($link, "select * from order_info where id='$order_id'");

$order_Info_Data = mysqli_fetch_array($order_Info_SQL);

$order_Product_SQL = mysqli_query($link, "select * from order_product where orderID='$order_id'");

$order_Product_Data = mysqli_fetch_array($order_Product_SQL);

$result = ['order_id' => $order_id, 'orderData' => $order_Info_Data['orderDate'], 'proofOk' => $order_Info_Data['proofsOk'], 'customer' => $order_Info_Data['customer'], 'contactPerson' => $order_Info_Data['contactPerson'],
    'article' => $order_Product_Data['article'], 'description' => $order_Product_Data['description'], 'number' => $order_Product_Data['number'], 'aPris' => $order_Product_Data['price'],
    'discount' => $order_Product_Data['discount'], 'summa' => $order_Product_Data['summa'], 'image' => $order_Product_Data['image']];

echo json_encode($result, JSON_UNESCAPED_UNICODE);