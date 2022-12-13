<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'orderdetail');
mysqli_set_charset($link, "utf8");
if (!$link) {
    exit('Connection error');
}

$orderId = $_POST["orderId"];
$orderDate = $_POST["orderDate"];
$proofsOk = $_POST["proofsOk"];
$customer = $_POST["customer"];
$contact_person = $_POST["contactPerson"];
$article = $_POST["article"];
$description = $_POST["description"];
$number = $_POST["number"];
$aPris = $_POST["aPris"];
$discount = $_POST["discount"];
$summa = $_POST["summa"];
$image = $_POST["imageId"];

if ($orderId == null) {
    mysqli_query($link, "insert into order_info (customer,contactPerson,orderDate,proofsOk) values ('$customer','$contact_person','$orderDate','$proofsOk')");

    $order_info_Id = mysqli_query($link, "select id from order_info order by id desc limit 1");

    $Id = mysqli_fetch_array($order_info_Id);

    mysqli_query($link, "insert into order_product(orderID,image,article,description,number,price,discount,summa) values ('$Id[0]','$image','$article','$description','$number','$aPris','$discount','$summa')");


    $result = ['code' => 200, 'orderId' => $Id[0], 'msg' => 'Save Successfully'];
} else {
    mysqli_query($link, "update order_info set customer='$customer',contactPerson='$contact_person',orderDate='$orderDate',proofsOk='$proofsOk'  where id='$orderId'");

    mysqli_query($link, "update order_product set image='$image',article='$article',description='$description',number='$number',price='$aPris',discount='$discount',summa='$summa' where orderID='$orderId'");

    $result = ['code' => 200, 'orderId' => $orderId, 'msg' => 'Update Successfully'];
}
echo json_encode($result);



