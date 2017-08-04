


<div class="modal fade" id="addCustomerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">EditUser</h4>
            </div>

            <form action="{!! route('editpost') !!}" method="POST" id="AddCustomerForm" class="form-group">
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
                            <input type="text" class="form-control" placeholder="Enter yourname" name="name" id="AddCustomerName" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="row">
                        <span class="col-md-3 col-xs-12 text-right">Email</span>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="email" id="AddCustomerEmail" readonly="">
                        </div>
                    </div>

                    <div class="row">
                        <input type="checkbox" id="changePassword" name="pass">
                        <span class="col-md-3 col-xs-12 text-right">Edit-password</span>
                        <div class="col-md-8">
                            <input type="password" class="form-control password" placeholder="Enter password" name="pass" id="AddCustomerPhoneNumber" disabled="">
                        </div>
                    </div>
                    <div class="row">
                        <span class="col-md-3 col-xs-12 text-right">Re-password</span>
                        <div class="col-md-8">
                            <input type="password" class="form-control password" placeholder="Enter RePassword" name="re_pass" id="AddCustomerPhoneNumber" disabled="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
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


    $('#sandbox-container .input-daterange').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        language: "ja",
        forceParse: false,
        autoclose: true,
        todayHighlight: true
    });
</script>

    <script>
        $(document).ready(function(){
        $("#changePassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").attr('disabled','');
            }
        });
    });
</script>