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
                    <div class="box-body table-responsive no-padding">
                        <form name="commonSubmitFrm" id="commonSubmitFrm" method="post" action="{{ URL::route('admin::tool::common::save') }}">
                            <div class="form-group">
                                <label for="mainCd">메인 코드</label>
                                <input type="email" class="form-control" id="mainCd" placeholder="메인 코드를 입력해 주세요(ex. M0001)">
                            </div>
                            <table id="commonCreateTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">메인 코드</th>
                                        <th colspan="11">
                                            <input type="text" name="main_cd" class="" placeholder="메인 코드를 입력해 주세요(ex. M0001)">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th> &nbsp; </th>
                                        <th>상세코드</th>
                                        <th>이름</th>
                                        <th>ref_1</th>
                                        <th>ref_2</th>
                                        <th>ref_3</th>
                                        <th>ref_4</th>
                                        <th>ref_5</th>
                                        <th>ref_6</th>
                                        <th>ref_7</th>
                                        <th>ref_8</th>
                                        <th>ref_9</th>
                                        <th>ref_10</th>
                                    </tr>
                                    <tr>
                                        <th> <button type="button" id="submitDataBtn" class="btn btn-info"><i class="fa fa-plus"></i></button> </th>
                                        <th> <input type="text" name="submitDetCd" id="submitDetCd" class="submitObj det_cd" value="0"> </th>
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
                                    <tr>
                                        <td colspan="13"> 상세코드를 등록해 주시기 바랍니다. </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="13">
                                            <button type="button" id="formSubmitBtn" class="btn btn-primary pull-left">저장</button>
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
        var dataCnt = 0;

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

            $("#submitDataBtn")
                .on('click' , function() {
                    var submitChk = dataPlus(dataCnt);

                    if(submitChk) dataCnt++;
                });

            $("#formSubmitBtn")
                .on('click' , function() {
                    if(confirm('[알림!] 공통코드를 생성하시겠습니까?')) {
                        $("#commonSubmitFrm").submit();
                    }
                });

            $("input.submitObj")
                .on('keyup' , function(event) {
                    if(event.keyCode == 13) {
                        var submitChk = dataPlus(dataCnt);

                        if(submitChk) dataCnt++;
                    }
                })

        });
    </script>
@endsection