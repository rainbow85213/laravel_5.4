@extends('layouts.admin')

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">회원 생성</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" name="membSubmitFrm" id="membSubmitFrm" method="POST" action="{{ route('admin::member::update') }}" onSubmit="return membJoin();">
            {!! csrf_field() !!}
            <input type="hidden" name="userId" value="{{ $userArr->id }}">
            <div class="box-body col-sm-6">
                <div class="form-group">
                    <label for="membType" class="col-sm-2 control-label">회원 사용처</label>

                    <div class="col-sm-3">
                        <label>
                            <input type="radio" name="membType" class="membType minimal" value="member" checked> &nbsp;
                            일반용
                        </label>
                    </div>
                    <div class="col-sm-3">
                        <label>
                            <input type="radio" name="membType" class="membType minimal" value="admin"> &nbsp;
                            관리자용
                        </label>
                    </div>
                </div>
                <div class="form-group companyGroupLayer">
                    <label for="inputCompanyGroup" class="col-sm-2 control-label">부서그룹</label>
                    <div class="col-sm-10">
                        <select name="inputCompanyGroup" id="inputCompanyGroup" class="form-control">
                            <option value="0">부서그룹</option>
                            <option value="1">마케팅</option>
                            <option value="2">디자인팀</option>
                            <option value="3">개발팀</option>
                            <option value="4">영업팀</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="membEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="membEmail" id="membEmail" placeholder="Email" value="{{ $userArr->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="membPw" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <a href="#" type="button" class="btn btn-default"><i class="fa fa-undo"></i> 초기화</a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="membName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="membName" id="membName" placeholder="Member Name" value="{{ $userArr->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="membHp" class="col-sm-2 control-label">Hp</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="membHp" id="membHp" placeholder="Member Hp" value="{{ $userArr->user_hp }}">
                    </div>
                </div>

                <div class="form-group">
                    <a type="button" href="{{ URL::route('admin::member::index') }}" class="btn btn-default">List</a>
                    <button type="submit" class="btn btn-info pull-right">Update</button>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>
            <!-- /.box-footer -->
        </form>
    </div>
    <!-- /.box -->
@endsection

@section('style')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="/plugins/iCheck/all.css">

    <style type="text/css">
        .companyGroupLayer { display: none; }
    </style>
@endsection
@section('script')
    <!-- iCheck 1.0.1 -->
    <script src="/plugins/iCheck/icheck.min.js"></script>

    <script type="text/javascript">

        function membJoin() {
            console.log('form submit start');
            var membType = $(':radio[name=membType]:checked').val();

            if(membType == "admin") {
                if($.trim($("#inputCompanyGroup option:selected").val()) == 0) {
                    alert('[알림!] 직원 부서를 선택해 주시기 바랍니다');
                    return false;
                }
            }

            if($.trim($("#membEmail").val()) == "") {
                alert('[알림!] 회원 이메일을 입력해 주시기 바랍니다');
                $("#membEmail").focus();
                return false;
            }

            if($.trim($("#membName").val()) == "") {
                alert('[알림!] 회원 이름을 입력해 주시기 바랍니다.');
                $("#membName").focus();
                return false;
            }

            if($.trim($("#membHp").val()) == "") {
                alert('[알림!] 회원 연락처를 입력해 주시기 바랍다.');
                $("#membHp").focus();
                return false;
            }

            return true;
        }

        $(function () {

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });

            // 핸드폰 번호
            $("#membHp")
                .on('focus' , function() {
                    var regExp = /^01([0|1|6|7|8|9]?)-?([0-9]{3,4})-?([0-9]{4})$/;
                    if(regExp.test($(this).val()) == false){
                        $(this).val('');
                    }
                })
                .on('focusout' , function() {
                    var this_len=($(this).val()).length;
                    if( this_len <= '12' ){
                        //var hyphen_chg=/\d{3}-\d{3}-\d{4}$/g;
                        var str=$(this).val().replace(/[-]/gi,'');
                        var string=str.replace(/(^01[0|1|6|7|8|9]?)-?([0-9]{3,4})-?([0-9]{4})$/,"$1-$2-$3");
                        $(this).val(string);
                    }
                })
                .on('keydown', function(e) {
                    if( e.keyCode != '8' && e.keyCode != '46' ){
                        var input_text=$(this).val();
                        if( input_text.length == '3' || input_text.length == '8' ){
                            var add_hyphen=$(this).val()+'-';
                            $(this).val(add_hyphen);
                        }
                    }
                });

            // 회원 사용처 -> 관리자용 일때만 나오는 레이어
            $('input')
                .on('ifChecked' , function(event) {
                    if(event.target.value == "member") {
                        $('.companyGroupLayer').hide();
                    } else {
                        $('.companyGroupLayer').show();
                    }
                });

        });
    </script>
@endsection