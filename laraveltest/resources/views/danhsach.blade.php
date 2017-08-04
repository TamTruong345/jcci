
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/amazing-font.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="module1">
<header id="header">
    <div class="container-fluid">
        <div class="logo">
            <a href="index.html">
                <img src="images/logo.png" alt="" class="img-responsive">
            </a>
        </div>

    </div>
</header>
<nav id="mainNav" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

        <div class="row">
            <div class="col-md-5">
                <div class="btn-wrap">
                    <button type="submit" class="btn btn-primary module1-btn" data-toggle="modal" data-target="#addCustomerModal"><i class="ico-plus-circle"></i> 新規</button>
                    <a href="" class="btn btn-danger"><i class="ico-trash2"></i> 削除</a>
                </div>
            </div>
        </div>
        <div class="table-responsive table-custom">
            <table class="table table-bordered table-striped table-hover">
                <tbody>
                <tr style="background: #F2F2F2;">
                    <th class="text-center"><input type="checkbox"></th>
                    <th>Tên sản phẩm </th>
                    <th>Mã sản phẩm </th>
                    <th>Loại sản phẩm</th>
                    <th>Giá nhập vào</th>
                    <th>Giá bán ra</th>
                    <th>Nhà sản xuất</th>
                    <th>Hướng dẫn sử dụng</th>
                </tr>
                @foreach($sanpham as $sp)
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    {{--<td>U20170616-002</td>--}}
                    {{--<td>テスト３株式会社</td>--}}
                    {{--<td>太郎くん</td>--}}
                    {{--<td>2017/06/23</td>--}}
                    {{--<td>受注</td>--}}
                    {{--<td>123456</td>--}}
                    {{--<td>5345346</td>--}}
                    <td>{{$sp->tensp}}</td>
                    <td>{{$sp->masp}}</td>
                    <td>{{$sp->loaisp}}</td>
                    <td>{{$sp->gianhap}}</td>
                    <td>{{$sp->giaban}}</td>
                    <td>{{$sp->nhasx}}</td>
                    <td>{{$sp->hdsd}}</td>
                </tr>

                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- Add customer modal -->
<div class="modal fade" id="addCustomerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">お客様の作成</h4>
            </div>
            <form action="" method="POST" id="AddCustomerForm" class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row" id="AddCustomerError" style="display: none">
                        <div class="alert alert-danger">
                            <span id="AddCustomerErrorContent"></span>
                        </div>
                    </div>
                    <div class="row">
                        <span class="col-md-3 col-xs-12 text-right">会社名:</span>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="customer_name" id="AddCustomerName">
                        </div>
                    </div>
                    {{--<div class="row">--}}
                        {{--<span class="col-md-3 col-xs-12 text-right">場所:</span>--}}
                        {{--<div class="col-md-8">--}}
                            {{--<input type="text" class="form-control col-md-12" name="customer_post_code" id="AddCustomerPostCode">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<span class="col-md-3 col-xs-12 text-right">住所 1:</span>--}}
                        {{--<div class="col-md-8">--}}
                            {{--<input type="text" class="form-control" name="customer_address_1" id="AddCustomerAddress1">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<span class="col-md-3 col-xs-12 text-right">住所 2:</span>--}}
                        {{--<div class="col-md-8">--}}
                            {{--<input type="text" class="form-control" name="customer_address_2" id="AddCustomerAddress2">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" onclick="AddCustomer()" id="BtnAddCustomer" class="btn btn-default">作成</button>--}}
                {{--</div>--}}
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/datepicker/locales/bootstrap-datepicker.ja.min.js"></script>
<script>
    $('#sandbox-container .input-daterange').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        language: "ja",
        forceParse: false,
        autoclose: true,
        todayHighlight: true
    });
</script>
</body>
</html>