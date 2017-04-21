@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ route('admin::bbs::notice::create') }}" type="button" class="btn btn-primary pull-right">
                            <i class="fa fa-plus"></i> Notice Create
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Notice</h3>

                        <div class="box-tools">
                            <form method="post" name="noticeSearchFrm" id="noticeSearchFrm" action="{{ URL::route('admin::bbs::notice::index') }}">
                                {!! csrf_field() !!}
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="noticeSearchText" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="bbsNoticeListTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">순서</th>
                                    <th class="text-center">구분</th>
                                    <th class="text-center">제목</th>
                                    <th class="text-center">작성자</th>
                                    <th class="text-center">알림여부</th>
                                    <th class="text-center">비고</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bbsNoticeArr AS $bbsNotice)
                                <tr>
                                    <td class="text-center">{{ $bbsNotice->bbs_notice_sort }}</td>
                                    <td class="text-center">{{ $bbsNotice->bbs_notice_type_name }}</td>
                                    <td class="text-center">{{ $bbsNotice->bbs_notice_title }}</td>
                                    <td class="text-center">{{ $bbsNotice->user->name }}</td>
                                    <td class="text-center">{{ ($bbsNotice->bbs_notice_push_yn == "Y" ? "알림" : "미알림") }}</td>
                                    <td class="text-center">
                                        <a type="button" href="{{ URL::route('admin::bbs::notice::show' , $bbsNotice->id) }}" class="btn btn-info">보기</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="6">등록된 공지사항이 없습니다.</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">순서</th>
                                    <th class="text-center">구분</th>
                                    <th class="text-center">제목</th>
                                    <th class="text-center">작성자</th>
                                    <th class="text-center">알림여부</th>
                                    <th class="text-center">비고</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="box-footer clearfix text-center">
                        {{--<ul class="pagination pagination-sm no-margin pull-right">--}}
                            {{--<li><a href="#">&laquo;</a></li>--}}
                            {{--<li><a href="#">1</a></li>--}}
                            {{--<li><a href="#">2</a></li>--}}
                            {{--<li><a href="#">3</a></li>--}}
                            {{--<li><a href="#">&raquo;</a></li>--}}
                        {{--</ul>--}}
                        {{ $bbsNoticeArr->appends(['sort' => 'votes'])->links() }}
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
    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(function () {
            @if($errors->any())
                OpenModalBox('오류','{!! implode('', $errors->all('<div>:message</div>')) !!}');
            @endif

            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                // error_alert('{{ Session::get('alert-' . $msg) }}');
                OpenModalBox('알림','{{ Session::get('alert-' . $msg) }}');
                @endif
            @endforeach
            // $("#bbsNoticeListTable").DataTable();
        });
    </script>
@endsection