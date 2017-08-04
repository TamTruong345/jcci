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
        <div class="headerNav">
            <a href="" class="headerNav-item"><i class="ico-user"></i> 管理者</a>
            <a href="" class="headerNav-item"><i class="ico-power-switch"></i> ログアウト</a>
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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav mainNav-list module1">
            <li><a href="" class="active">受付</a></li>
            <li><a href="">見積書</a></li>
            <li><a href="">注文書</a></li>
            <li><a href="">発注書</a></li>
            <li><a href="">請求書</a></li>
            <li><a href="">顧客マスタ</a></li>
            <li><a href="">商品マスタ</a></li>
            <li><a href="">システム管理</a></li>
        </ul>
    </div>
</nav>
<main>
    <div class="breadcrumb-wrap">
        <ol class="breadcrumb breadcrumb-custom">
            <li><a href="#">TOP</a></li>
            <li class="active">受付</li>
        </ol>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            Thông tin đăng ký không đầy đủ, bạn cần nhập các thông tin:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




    <div class="container-fluid">
        <div class="form-wrap clearfix">
            <div class="form-side">
                <div class="form-side-content module1-color">
                    <i class="ico-magnifier"></i>検索
                </div>
            </div>
            <div class="form-main">
                <form action="">
                    <div class="clearfix">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">受付番号</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">受付番号</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="sandbox-container">
                                <div class="input-daterange input-group" id="datepicker">
                                    <span class="input-group-addon" id="basic-addon1">受付番号</span>
                                    <div style="display: table; width: 100%;">
                                        <input type="text" class="input-sm form-control" name="start" placeholder="____/__/__" />
                                        <span class="input-group-addon" style="width: 50px; display: table-cell;">~</span>
                                        <input type="text" class="input-sm form-control" name="end" placeholder="____/__/__" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">取引先</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">対応状況</span>
                                <select name="" id="" class="form-control">
                                    <option value="">一時保存</option>
                                    <option value="">一時保存</option>
                                    <option value="">一時保存</option>
                                    <option value="">一時保存</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">担当者</span>
                                <select name="" id="" class="form-control">
                                    <option value="">秋田</option>
                                    <option value="">秋田</option>
                                    <option value="">秋田</option>
                                    <option value="">秋田</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">発注番号</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">注文番号</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">発注番号</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <button type="submit" class="btn btn-primary module1-btn"><i class="ico-magnifier"></i> 検索</button>
                            <a href="" class="btn btn-default"><i class="ico-cross-circle"></i> リセット</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="btn-wrap">
                    <button type="submit" class="btn btn-primary module1-btn" data-toggle="modal" data-target="#addCustomerModal"><i class="ico-plus-circle"></i>Add</button>
                    <a href="#" class="btn btn-danger" id="del-del" onclick="return Delete('Bạn có chắc muốn xóa không?')"><i class="ico-trash2"></i>Delete</a>
                </div>
            </div>
        </div>

        <div class="table-responsive table-custom">
            <form action="{{ route('deletepost') }}" method="POST" class="" id="form-del">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <table class="table table-bordered table-striped table-hover">
                <tbody>
                <tr style="background: #F2F2F2;">
                    <th class="text-center"><input type="checkbox"></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Edit</th>
                </tr>
                @foreach($user as $item)
                    <tr>
                        <td class="text-center"><input type="checkbox" value="{{$item->id}}" name="checkbox[]"></td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </form>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <ul class="pagination pagination-custom">
                    {{$user->links()}}
                </ul>
            </div>
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
                <h4 class="modal-title">AddUser</h4>
            </div>

            <form action="{!! route('addpost') !!}" method="POST" id="AddCustomerForm" class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row" id="AddCustomerError" style="display: none">
                        <div class="alert alert-danger">
                            <span id="AddCustomerErrorContent"></span>
                        </div>
                    </div>
                    <div class="row">
                        <span class="col-md-3 col-xs-12 text-right">Username</span>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name" id="AddCustomerName">
                        </div>
                    </div>
                    <div class="row">
                        <span class="col-md-3 col-xs-12 text-right">Email</span>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="email" id="AddCustomerEmail">
                        </div>
                    </div>

                    <div class="row">
                        <span class="col-md-3 col-xs-12 text-right">password</span>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="pass" id="AddCustomerPhoneNumber">
                        </div>
                    </div>
                    <div class="row">
                        <span class="col-md-3 col-xs-12 text-right">Re-password</span>
                     <div class="col-md-8">
                            <input type="password" class="form-control" name="re_pass" id="AddCustomerPhoneNumber">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{--<button type="button" onclick="AddCustomer()" id="BtnAddCustomer" class="btn btn-default">作成</button>--}}
                    <input type="submit" class="btn btn-default" value="Add" name="acs" id="BtnAddCustomer">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="js/datepicker/locales/bootstrap-datepicker.ja.min.js"></script>
<script>

//    $('#del-del').click(function() {
//        $('#form-del').submit();
//    });

    $('#sandbox-container .input-daterange').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        language: "ja",
        forceParse: false,
        autoclose: true,
        todayHighlight: true
    });

    function Delete(del)
    {
        if(window.confirm(del))
        {
            $('#form-del').submit();
        }
        else
        {
            return false;
        }
    }

</script>
</body>
</html>