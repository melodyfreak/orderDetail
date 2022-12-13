$(function () {
    // form validation
    $(window).load(function () {
        $.post("selectData.php", {

                orderId: getUrlParam('id'),
            },
            function (data) {

                var obj = eval("(" + data + ")");

                $("#order_info_id").val(obj.order_id);
                $("#date").val(obj.orderData);
                $("#proofs").val(obj.proofOk);
                $("#customer").val(obj.customer);
                $("#contact").val(obj.contactPerson);
                $("#inputArticle").val(obj.article);
                $("#inputDescrible").val(obj.description);
                $("#inputNumber").val(obj.number);
                $("#inputApris").val(obj.aPris);
                $("#inputDiscount").val(obj.discount);
                $("#inputSumma").val(obj.summa);
                $("#fileImage").attr("src", obj.image);
                $("#big-title").html(obj.order_id);
                $("#title-customer").html(obj.customer);
                if(obj.image!="" || obj.image!=null){
                    $("#fileImage").css("display", "block");
                }
                $("#fileImage").attr("src", obj.image);
            })

    })

    $(".saveImageButton").click(function () {

        var file = $("#uploadFile")[0].files[0];
        var data = new FormData();
        data.append("file", file);

        $.ajax({
            type: "post",
            url: "/upload.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (data) {
                var obj = eval("(" + data + ")");
                $("#imageId").val(obj.imageId);
                $("#fileImage").attr("src", obj.imageId);
                $("#fileImage").css("display", "block");
                alert(obj.msg);
            }
        })
    })

    $(".needs-validation").submit(function () {
        if (allCheck() == false) {
            return false;
        }

        $.post(
            "submitForm.php",
            {
                orderId: $("#order_info_id").val(),
                orderDate: $("#date").val(),
                proofsOk: $("#proofs").val(),
                customer: $("#customer").val(),
                contactPerson: $("#contact").val(),
                article: $("#inputArticle").val(),
                description: $("#inputDescrible").val(),
                number: $("#inputNumber").val(),
                aPris: $("#inputApris").val(),
                discount: $("#inputDiscount").val(),
                summa: $("#inputSumma").val(),
                imageId: $("#imageId").val()
            }, function (data) {
                var obj = eval("(" + data + ")");
                if (obj.code == 200) {
                    $("#order_info_id").val(obj.orderId);
                    alert(obj.msg+" and the order_ID which you just operated was "+obj.orderId);
                    $(location).attr("href", "index.php");
                } else {
                    alert('The operation failed');
                }
            })
        return false;
    });


    // inputBorder dynamic
    $(".borderDispear").mouseenter(function () {
        showborder($(this));
    });

    $(".borderDispear").mouseleave(function () {
        dispearBorder($(this));
    })

    function getUrlParam(name) {

        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");

        var r = window.location.search.substr(1).match(reg);

        if (r != null) return unescape(r[2]);
        return null;

    }

    function showborder(Object) {
        Object.css("border-style", "solid");
    }

    function dispearBorder(Object) {
        Object.css("border-style", "none");
    }

    function allCheck() {
        var orderDate = $("#date").val();
        var dateForm = /^(\d{4})-(\d{1,2})-(\d{1,2})$/;
        var proofs = $("#proofs").val();
        var proofsForm = /^(\d{4})-(\d{1,2})-(\d{1,2})$/;
        var customer = $("#customer").val();
        var contact = $("#contact").val();

        if (dateForm.test(orderDate) == false) {
            alert("The form of Order date is wrong");
            $("#date").focus();
            return false;
        }

        if (proofsForm.test(proofs) == false) {
            alert("The form of Proofs OK is wrong");
            $("#proofs").focus();
            return false;
        }

        if (customer.length < 2) {
            alert("The length of the Customer should be greater than 2");
            $("#customer").focus();
            return false;
        }

        if (contact.length < 2) {
            alert("The length of the Contact person should be greater than 2");
            $("#contact").focus();
            return false;
        }
    }
})

