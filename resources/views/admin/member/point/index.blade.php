@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">포인트 리스트</h3>
                        <a href="#" type="button" class="btn btn-primary pull-right">
                            <i class="fa fa-plus"></i> 포인트 등록
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="point_list" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Index</th>
                                    <th class="text-center">회원명</th>
                                    <th class="text-center">모바일</th>
                                    <th class="text-center">이메일</th>
                                    <th class="text-center">Point</th>
                                    <th class="text-center">비고</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Index</th>
                                    <th class="text-center">회원명</th>
                                    <th class="text-center">모바일</th>
                                    <th class="text-center">이메일</th>
                                    <th class="text-center">Point</th>
                                    <th class="text-center">비고</th>
                                </tr>
                            </tfoot>
                        </table>
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
        div#point_list_filter.dataTables_filter label { float: right; }
        div#point_list_paginate.dataTables_paginate ul { float: none; }
    </style>
@endsection

@section('script')
    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $("#point_list").DataTable();
        });
    </script>
@endsection