@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">공통코드 생성</h3>
                    </div>
                    <!-- /.box-header -->
                    <div style="margin: 10px;"></div>
                    <div class="box-body table-responsive no-padding">
                        <form name="commonSubmitFrm" id="commonSubmitFrm" method="post" action="{{ URL::route('admin::tool::common::update') }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="mainCd">메인 코드</label>
                                <input type="text" class="form-control" id="mainCd" name="mainCd" placeholder="메인 코드를 입력해 주세요(ex. M0001)" value="{{ $mainCd }}" readonly>
                            </div>
                            <table id="commonCreateTable" class="table table-hover">
                                <thead>
                                <tr>
                                    <th> &nbsp; </th>
                                    <th>상세보기</th>
                                    <th><input type="text" name="topName" class="topName" value="{{ $commonCdsArr['th']['name'] }}"></th>
                                    <th><input type="text" name="topRef1" class="topRef1" value="{{ $commonCdsArr['th']['ref_1'] }}"></th>
                                    <th><input type="text" name="topRef2" class="topRef2" value="{{ $commonCdsArr['th']['ref_2'] }}"></th>
                                    <th><input type="text" name="topRef3" class="topRef3" value="{{ $commonCdsArr['th']['ref_3'] }}"></th>
                                    <th><input type="text" name="topRef4" class="topRef4" value="{{ $commonCdsArr['th']['ref_4'] }}"></th>
                                    <th><input type="text" name="topRef5" class="topRef5" value="{{ $commonCdsArr['th']['ref_5'] }}"></th>
                                    <th><input type="text" name="topRef6" class="topRef6" value="{{ $commonCdsArr['th']['ref_6'] }}"></th>
                                    <th><input type="text" name="topRef7" class="topRef7" value="{{ $commonCdsArr['th']['ref_7'] }}"></th>
                                    <th><input type="text" name="topRef8" class="topRef8" value="{{ $commonCdsArr['th']['ref_8'] }}"></th>
                                    <th><input type="text" name="topRef9" class="topRef9" value="{{ $commonCdsArr['th']['ref_9'] }}"></th>
                                    <th><input type="text" name="topRef10" class="topRef10" value="{{ $commonCdsArr['th']['ref_10'] }}"></th>
                                </tr>
                                <tr>
                                    <th> <button type="button" id="submitDataBtn" class="btn btn-info"><i class="fa fa-plus"></i></button> </th>
                                    <th> <input type="text" name="submitDetCd" id="submitDetCd" class="submitObj det_cd" value="{{ sizeof($commonCdsArr['td']) + 1 }}"> </th>
                                    <th> <input type="text" name="submitName" id="submitName" class="submitObj cd_name" value="이름"> </th>
                                    <th> <input type="text" name="submitRef1" id="submitRef1" class="submitObj ref_1" value=""> </th>
                                    <th> <input type="text" name="submitRef2" id="submitRef2" class="submitObj ref_2" value=""> </th>
                                    <th> <input type="text" name="submitRef3" id="submitRef3" class="submitObj ref_3" value=""> </th>
                                    <th> <input type="text" name="submitRef4" id="submitRef4" class="submitObj ref_4" value=""> </th>
                                    <th> <input type="text" name="submitRef5" id="submitRef5" class="submitObj ref_5" value=""> </th>
                                    <th> <input type="text" name="submitRef6" id="submitRef6" class="submitObj ref_6" value=""> </th>
                                    <th> <input type="text" name="submitRef7" id="submitRef7" class="submitObj ref_7" value=""> </th>
                                    <th> <input type="text" name="submitRef8" id="submitRef8" class="submitObj ref_8" value=""> </th>
                                    <th> <input type="text" name="submitRef9" id="submitRef9" class="submitObj ref_9" value=""> </th>
                                    <th> <input type="text" name="submitRef10" id="submitRef10" class="submitObj ref_10" value=""> </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($commonCdsArr['td'] AS $key => $data)
                                        <tr id='dataLayer_{{ $key }}'>
                                            <th> <button type="button" class="btn btn-info deleteDataBtn" layerId="dataLayer_{{ $key }}"><i class="fa fa-minus"></i></button> </th>
                                            <th> <input type="text" name="detCd[]" class="det_cd" value="{{ $data->det_cd }}"> </th>
                                            <th> <input type="text" name="name[]" class="cd_name" value="{{ $data->name }}"> </th>
                                            <th> <input type="text" name="ref1[]" class="ref_1" value="{{ $data->ref_1 }}"> </th>
                                            <th> <input type="text" name="ref2[]" class="ref_2" value="{{ $data->ref_2 }}"> </th>
                                            <th> <input type="text" name="ref3[]" class="ref_3" value="{{ $data->ref_3 }}"> </th>
                                            <th> <input type="text" name="ref4[]" class="ref_4" value="{{ $data->ref_4 }}"> </th>
                                            <th> <input type="text" name="ref5[]" class="ref_5" value="{{ $data->ref_5 }}"> </th>
                                            <th> <input type="text" name="ref6[]" class="ref_6" value="{{ $data->ref_6 }}"> </th>
                                            <th> <input type="text" name="ref7[]" class="ref_7" value="{{ $data->ref_7 }}"> </th>
                                            <th> <input type="text" name="ref8[]" class="ref_8" value="{{ $data->ref_8 }}"> </th>
                                            <th> <input type="text" name="ref9[]" class="ref_9" value="{{ $data->ref_9 }}"> </th>
                                            <th> <input type="text" name="ref10[]" class="ref_10" value="{{ $data->ref_10 }}"> </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="13">
                                        <button type="button" id="formSubmitBtn" class="btn btn-primary pull-left">수정</button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection

@section('style')
    <style>

    </style>
@endsection

@section('script')
    <script type="text/javascript">
        var dataCnt = "{{ sizeof($commonCdsArr['td']) + 1 }}";

        function dataPlus(numbering) {
            if($.trim($("#submitDetCd").val()) == "") {
                alert('[알림!] 상세코드는 입력해야 합니다.');
                $("#submitDetCd").val('').focus();
                return false;
            }

            if($.trim($("#submitName").val()) == "") {
                alert('[알림!] 이름은 입력해야 합니다.');
                $("#submitName").val('').focus();
                return false;
            }

            if(numbering == 0) $("#commonCreateTable tbody").empty();
            var plusData = "";

            plusData += "<tr id='dataLayer_" + numbering + "'>";
            plusData += "<th> <button type=\"button\" class=\"btn btn-info deleteDataBtn\" layerId=\"dataLayer_" + numbering + "\"><i class=\"fa fa-minus\"></i></button> </th>";
            plusData += "<th> <input type=\"text\" name=\"detCd[]\" class=\"det_cd\" value=\"" + $("#submitDetCd").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"name[]\" class=\"cd_name\" value=\"" + $("#submitName").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref1[]\" class=\"ref_1\" value=\"" + $("#submitRef1").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref2[]\" class=\"ref_2\" value=\"" + $("#submitRef2").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref3[]\" class=\"ref_3\" value=\"" + $("#submitRef3").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref4[]\" class=\"ref_4\" value=\"" + $("#submitRef4").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref5[]\" class=\"ref_5\" value=\"" + $("#submitRef5").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref6[]\" class=\"ref_6\" value=\"" + $("#submitRef6").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref7[]\" class=\"ref_7\" value=\"" + $("#submitRef7").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref8[]\" class=\"ref_8\" value=\"" + $("#submitRef8").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref9[]\" class=\"ref_9\" value=\"" + $("#submitRef9").val() + "\"> </th>";
            plusData += "<th> <input type=\"text\" name=\"ref10[]\" class=\"ref_10\" value=\"" + $("#submitRef10").val() + "\"> </th>";
            plusData += "</tr>";

            $("#submitDetCd").val(parseInt(numbering) + 1);
            $("#submitName").val('').focus();
            $("#submitRef1").val('');
            $("#submitRef2").val('');
            $("#submitRef3").val('');
            $("#submitRef4").val('');
            $("#submitRef5").val('');
            $("#submitRef6").val('');
            $("#submitRef7").val('');
            $("#submitRef8").val('');
            $("#submitRef9").val('');
            $("#submitRef10").val('');

            $("#commonCreateTable tbody").append(plusData);

            $("button.deleteDataBtn")
                .on('click' , function() {
                    var tmpVal = $(this).attr('layerId');

                    $("#" + tmpVal).hide();

                    return false;
                });

            return true;
        }

        $(function () {

            @if($errors->any())
                OpenModalBox('오류','{!! implode('', $errors->all('<div>:message</div>')) !!}');
            @endif

            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            // error_alert('{{ Session::get('alert-' . $msg) }}');
            OpenModalBox('오류','{{ Session::get('alert-' . $msg) }}');
            @endif
        @endforeach

                $("#submitDataBtn")
                .on('click' , function() {
                    var submitChk = dataPlus(dataCnt);

                    if(submitChk) dataCnt++;
                });

            $("#formSubmitBtn")
                .on('click' , function() {
                    if($.trim($("#mainCd").val()) == "") {
                        alert('[알림!] 메인코드를 입력해 주시기 바랍니다.');
                        $("#mainCd").val("").focus();
                        return false;
                    }

                    if($("#mainCd").val().length != 5) {
                        alert('[알림!] 메인코드는 한자리 영문과 네자리의 숫자로 이루어져 있어야 합니다.');
                        $("#mainCd").val("").focus();
                        return false;
                    }

                    if(confirm('[알림!] 공통코드를 수정하시겠습니까?')) {
                        $("#commonSubmitFrm").submit();
                    }
                });

            $("input.submitObj")
                .on('keyup' , function(event) {
                    if(event.keyCode == 13) {
                        var submitChk = dataPlus(dataCnt);

                        if(submitChk) dataCnt++;
                    }
                });

            $("#mainCd")
                .on('focusout' , function() {

                });
        });
    </script>
@endsection