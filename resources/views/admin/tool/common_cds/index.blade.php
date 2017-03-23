@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">공통코드</h3>
                        <a href="{{ route('admin::tool::common::create') }}" type="button" class="btn btn-primary pull-right">
                            <i class="fa fa-plus"></i> 공통코드 등록
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="commonCdsTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">작성자</th>
                                <th class="text-center">main_cd</th>
                                <th class="text-center">name</th>
                                <th class="text-center">ref_1</th>
                                <th class="text-center">ref_2</th>
                                <th class="text-center">ref_3</th>
                                <th class="text-center">ref_4</th>
                                <th class="text-center">ref_5</th>
                                <th class="text-center">ref_6</th>
                                <th class="text-center">ref_7</th>
                                <th class="text-center">ref_8</th>
                                <th class="text-center">ref_9</th>
                                <th class="text-center">ref_10</th>
                                <th class="text-center">비고</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($commonCdsArr AS $commonCd)
                                <tr>
                                    <td>{{ $commonCd->user->name }}</td>
                                    <td>{{ $commonCd->main_cd }}</td>
                                    <td>{{ $commonCd->name }}</td>
                                    <td>{{ $commonCd->ref_1 }}</td>
                                    <td>{{ $commonCd->ref_2 }}</td>
                                    <td>{{ $commonCd->ref_3 }}</td>
                                    <td>{{ $commonCd->ref_4 }}</td>
                                    <td>{{ $commonCd->ref_5 }}</td>
                                    <td>{{ $commonCd->ref_6 }}</td>
                                    <td>{{ $commonCd->ref_7 }}</td>
                                    <td>{{ $commonCd->ref_8 }}</td>
                                    <td>{{ $commonCd->ref_9 }}</td>
                                    <td>{{ $commonCd->ref_10 }}</td>
                                    <td class="text-center">
                                        <a type="button" href="{{ URL::route('admin::tool::common::show' , $commonCd->main_cd) }}" class="btn btn-info">상세보기</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="14">등록된 공통코드가 없습니다.</td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="text-center">작성자</th>
                                <th class="text-center">main_cd</th>
                                <th class="text-center">name</th>
                                <th class="text-center">ref_1</th>
                                <th class="text-center">ref_2</th>
                                <th class="text-center">ref_3</th>
                                <th class="text-center">ref_4</th>
                                <th class="text-center">ref_5</th>
                                <th class="text-center">ref_6</th>
                                <th class="text-center">ref_7</th>
                                <th class="text-center">ref_8</th>
                                <th class="text-center">ref_9</th>
                                <th class="text-center">ref_10</th>
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
        div#example1_filter.dataTables_filter label { float: right; }
        div#example1_paginate.dataTables_paginate ul { float: right; }
    </style>
@endsection

@section('script')
    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $("#commonCdsTable").DataTable();
        });
    </script>
@endsection