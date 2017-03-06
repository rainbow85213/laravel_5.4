@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">회원 리스트</h3>
                        <a href="{{ route('admin::member::create') }}" type="button" class="btn btn-primary pull-right">
                            <i class="fa fa-plus"></i> 회원 등록
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Index</th>
                                    <th class="text-center">회원명</th>
                                    <th class="text-center">이메일</th>
                                    <th class="text-center">Point</th>
                                    <th class="text-center">비고</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user_arr AS $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->point }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info"><i class="fa fa-tv"></i> 상세</button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-close"></i>탈퇴</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Index</th>
                                    <th class="text-center">회원명</th>
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
            $("#example1").DataTable();
        });
    </script>
@endsection