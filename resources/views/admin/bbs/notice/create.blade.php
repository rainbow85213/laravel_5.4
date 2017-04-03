@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Notice Create</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" name="bbsNoticeFrm" id="bbsNoticeFrm" class="form-horizontal" action="{{ URL::route('admin::bbs::notice::save') }}" onSubmit="return bbs_notice_submit();">
                            {!! csrf_field() !!}
                            <input type="hidden" name="bbsNoticeWriterId" id="bbsNoticeWriterId" value="{{ $userId }}">

                            <div class="form-group">
                                <label for="bbsNoticeType" class="col-sm-2 control-label">구분</label>
                                <div class="col-sm-10">
                                    <select name="bbsNoticeType" id="bbsNoticeType" class="select2 col-sm-12">
                                        @foreach($bbsNoticeTypeArr AS $bbsNoticeType)
                                            <option value="{{ $bbsNoticeType->det_cd }}">{{ $bbsNoticeType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bbsNoticeTitle" class="col-sm-2 control-label">제목</label>
                                <div class="col-sm-10">
                                    <input type="text" name="bbsNoticeTitle" id="bbsNoticeTitle" class="form-control" placeholder="제목을 입력해 주시기 바랍니다.">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bbsNoticeContent" class="col-sm-2 control-label">내용</label>
                                <div class="col-sm-10">
                                    <textarea id="bbsNoticeContent" name="bbsNoticeContent" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group pull-right">
                                <div class="col-sm-12">
                                    <button type="submit" id="bbsNoticeSubmitBtn" class="btn btn-primary">저장</button>
                                    <a type="button" href="{{ URL::route('admin::bbs::notice::index') }}" class="btn btn-danger">취소</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-footer clearfix">
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('style')
    <style>
        div#example1_filter.dataTables_filter label { float: right; }
        div#example1_paginate.dataTables_paginate ul { float: right; }
    </style>
@endsection

@section('script')
    <!-- Select2 -->
    <script src="/plugins/select2/select2.full.min.js"></script>
    <!-- CK Editor -->
    <script src="/plugins/ckeditor/ckeditor.js"></script>

    <script type="text/javascript">
        CKEDITOR.replace('bbsNoticeContent');

        function bbs_notice_submit() {
            if($.trim($("#bbsNoticeType").val()) == "0") {
                alert('[알림!] 구분을 선택해 주시기 바랍니다.');
                $("#bbsNoticeType").focus();
                return false;
            }

            if($.trim($("#bbsNoticeTitle").val()) == "") {
                alert('[알림!] 제목을 입력해 주시기 바랍니다.');
                $("#bbsNoticeTitle").val('').focus();
                return false;
            }

            return true;
        }

        $(function () {
            $(".select2").select2();
        });
    </script>
@endsection