
<!DOCTYPE html>
<html>

<head>
    <title>Order Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/orderDetail.css">
    <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
</head>

<body>
<div class="container ">
    <form method="post" action="" class="needs-validation" novalidate>
        <!-- top -->
        <input type="hidden" id="order_info_id" name="orderId" value="">
        <div class="row top ">
            <div class="col-md-6">
                <h2>Order <span id="big-title"></span> - <span id="title-customer"></span></h2>
            </div>
            <div class="col-md-3">
                <label for="">Order Manager</label>
                <select name="orderManager" class="form-select">
                    <option>Electronic</option>
                    <option>Bit</option>
                    <option>Perfecto</option>
                    <option>Simple</option>
                    <option>SomeDieYoung</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="">Order Statue</label>
                <select class="form-select">
                    <option>Pending payment</option>
                    <option>Paid and Dropshipping</option>
                    <option>Shipping</option>
                    <option>Received</option>
                </select>
            </div>
        </div>
        <hr>
        <!-- medium -->
        <div class="row medium">
            <div class="col-md-6">
                <div class="Dates">
                    <h3>Dates</h3>
                    <div class="row">
                        <div class="col-md-3 OrderDates form-group styleOnly">
                            <label for="">Order date <span class="redAlert">*</span></label>
                            <input id='date' type='text' name='orderDate' class='form-control'
                                   value='' required>
                        </div>
                        <div class="col-md-3 col-md-push-2 ProofsOK form-group styleOnly">
                            <label for="">Proofs Ok <span class="redAlert">*</span></label>
                            <input id='proofs' type='text' name='proofsOk' class='form-control'
                                   value='' required>
                        </div>
                    </div>
                </div>
                <div class="OrderInfo">
                    <h3>Order info</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="Customer form-group styleOnly">
                                <label for="">Customer <span class="redAlert">*</span></label>
                                <input id='customer' type='text' name='customer' class='form-control'
                                       value='' required>
                            </div>
                            <div class="CustomOrderNumber styleOnly">
                                <label>Custom order number</label>
                                <input type="text" class="">
                            </div>
                            <div class="Comment form-group styleOnly">
                                <label for="">Comment</label>
                                <textarea class="" name="text" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ContactPerson form-group styleOnly">
                                <label for="">Contact Person <span class="redAlert">*</span></label>
                                <input id='contact' type='text' name='contactPerson' class='form-control'
                                       value='' required>
                            </div>
                            <div class="Phone form-group styleOnly">
                                <label for="">Phone</label>
                                <input id="order-phone" type="text" class="phone">
                            </div>
                            <div class="E-mail form-group styleOnly">
                                <label for="">E-mail</label>
                                <input id="order-email" type="text" class="email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Billing</h3>
                        <div class="CompanyName form-group styleOnly">
                            <label for="">Company Name</label>
                            <input type="text" class="">
                        </div>
                        <div class="Name form-group styleOnly">
                            <label for="">name</label>
                            <input id="B-name" type="text" class="name">
                        </div>
                        <div class="AddressRow1 form-group styleOnly">
                            <label for="">Address row 1</label>
                            <input type="text" class="">
                        </div>
                        <div class="AddressRow2 form-group styleOnly">
                            <label for=""> Address row 2</label>
                            <input type="text" class="">
                        </div>
                        <div class="row">
                            <div class="Zip form-group col-md-4 styleOnly">
                                <label for="">Zip</label>
                                <input type="text" class="">
                            </div>
                            <div class="City form-group col-md-8 styleOnly">
                                <label for="">City</label>
                                <input type="text" class="">
                            </div>
                        </div>
                        <div class="Country styleOnly">
                            <Label for="">Country</Label>
                            <select name="" id="BillingSelect" class="select">
                                <option value="">China</option>
                                <option value="">English</option>
                                <option value="">America</option>
                                <option value="">Russia</option>
                                <option value="">Greece</option>
                                <option value="">France</option>
                                <option value="">Germany</option>
                                <option value="">Japan</option>
                                <option value="">South Korea</option>
                                <option value="">Singapore</option>
                            </select>
                        </div>
                        <div class="Phone form-group styleOnly">
                            <label for="">Phone</label>
                            <input id="B-phone" type="text" class="phone">
                        </div>
                        <div class="E-mail form-group styleOnly">
                            <label for="">E-mail</label>
                            <input id="B-email" type="text" class="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Delivery</h3>
                        <div class="CompanyName form-group styleOnly">
                            <label for="">Company Name</label>
                            <input type="text" class="">
                        </div>
                        <div class="Name form-group styleOnly">
                            <label for="">name</label>
                            <input id="name" type="text" class="name">
                        </div>
                        <div class="AddressRow1 form-group styleOnly">
                            <label for="">Address row 1</label>
                            <input type="text" class="">
                        </div>
                        <div class="AddressRow2 form-group styleOnly">
                            <label for=""> Address row 2</label>
                            <input type="text" class="">
                        </div>
                        <div class="row">
                            <div class="Zip form-group col-md-4 styleOnly">
                                <label for="">Zip</label>
                                <input type="text" class="">
                            </div>
                            <div class="City form-group col-md-8 styleOnly">
                                <label for="">City</label>
                                <input type="text" class="">
                            </div>
                        </div>
                        <div class="country form-group styleOnly">
                            <Label for="">Country</Label>
                            <select name="" id="" class="select">
                                <option value="">China</option>
                                <option value="">English</option>
                                <option value="">America</option>
                                <option value="">Russia</option>
                                <option value="">Greece</option>
                                <option value="">France</option>
                                <option value="">Germany</option>
                                <option value="">Japan</option>
                                <option value="">South Korea</option>
                                <option value="">Singapore</option>
                            </select>
                        </div>
                        <div class="phone form-group styleOnly">
                            <label for="">Phone</label>
                            <input id="phone" type="text" class="phone">
                        </div>
                        <div class="e-mail form-group styleOnly">
                            <label for="">E-mail</label>
                            <input id="email" type="text" class="email">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- tail -->
        <div class="tail">
            <table class="table">
                <thead>
                <tr>
                    <td class="col-md-3">IMAGE</td>
                    <td class="col-md-2">ARTICLE</td>
                    <td class="col-md-3">DESCRIBTION</td>
                    <td class="col-md-1">NUMBER</td>
                    <td class="col-md-1">A-PIRS</td>
                    <td class="col-md-1">DISCOUNT</td>
                    <td class="col-md-1">SUMMA</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <form class="image" id="image" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="imageId" value="">
                            <img style="display: none" id="fileImage" src="" width="100%" height="100%" alt="">
                            <input type="file" id="uploadFile" name="file" value="">
                            <button class="saveImageButton btn btn-primary" type="button" >save image</button>
                        </form>
                    </td>
                    <td>
                        <div>
                            <input name="article" class="borderDispear" type="text" id="inputArticle" value=''>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input name="describtion" class="borderDispear" type="text" id="inputDescrible" value=''>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input name="number" class="borderDispear" type="text" id="inputNumber" value=''>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input name="aPris" class="borderDispear" type="text" id="inputApris" value=''>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input name="discount" class="borderDispear" type="text" id="inputDiscount" value=''>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input name="summa" class="borderDispear" type="text" id="inputSumma" value=''>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <input id="submit" type="submit" class="btn btn-primary col-md-1 offset-md-11" value="submit"/>
    </form>

</div>
<script src="js/orderDetail.js"></script>
<script src="js/index.js"></script>
<script>
    (function () {
        // 'use strict';
        window.addEventListener('load', function () {
            var forms = $(".needs-validation");
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() == false) {
                        event.preventDefault();
                        // event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>

</html>