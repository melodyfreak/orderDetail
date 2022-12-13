$("#add-form").click(function () {
    $(location).attr("href", "orderDetail.php");
})

$("#edit-form").click(function () {
    var orderId = $("#edit-input").val();
    $(location).attr("href", "orderDetail.php?id=" + orderId);
})