@extends('layouts.admin')

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">회원 생성</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="membType" class="col-sm-2 control-label">회원 사용처</label>

                    <div class="col-sm-2">
                        <label>
                            <input type="radio" name="membType" class="membType minimal" value="member" checked> &nbsp;
                            일반용
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <label>
                            <input type="radio" name="membType" class="membType minimal" value="company"> &nbsp;
                            관리자용
                        </label>
                    </div>
                </div>
                <div class="form-group companyGroupLayer">
                    <label for="inputCompanyGroup" class="col-sm-2 control-label">부서그룹</label>
                    <div class="col-sm-10">
                        <select name="inputCompanyGroup" id="inputCompanyGroup" class="form-control">
                            <option value="1">마케팅</option>
                            <option value="2">디자인팀</option>
                            <option value="3">개발팀</option>
                            <option value="4">영업팀</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailId" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="emailId" id="emailId" placeholder="Email ID">
                    </div>
                    <label class="col-sm-1 text-center">@</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="emailId" id="emailAdddr" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="membName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="membName" id="membName" placeholder="Member Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="membHp" class="col-sm-2 control-label">Hp</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="membHp" id="membHp" placeholder="Member Hp">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
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
        $(function () {

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
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