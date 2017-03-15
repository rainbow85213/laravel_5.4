<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- header -->
    @include('layouts.admin.header')
    <title>{{ config('app.name', 'SpoView') }}</title>

    @section('style')
        <style>
            .example-modal .modal {
                position: relative;
                top: auto;
                bottom: auto;
                right: auto;
                left: auto;
                display: none;
                z-index: 1;
            }

            .example-modal .modal {
                background: transparent !important;
            }
        </style>
    @show
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        function OpenModalBox(header, inner){
            var modalbox = $('#modalbox');
            modalbox.find('.modal-title').html(header);
            modalbox.find('.modal-body').html(inner);
            modalbox.fadeIn('fast');
            $('.example-modal .modal').show();
        }

        function CloseModalBox(){
            var modalbox = $('#modalbox');
            modalbox.fadeOut('fast', function(){
                modalbox.find('.modal-title').children().remove();
                modalbox.find('.modal-body').children().remove();
                modalbox.find('.modal-bottom').children().remove();
                $('.example-modal .modal').hide();
            });
        }
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- top -->
    @include('layouts.admin.top')
    <!-- Left side column. contains the logo and sidebar -->
    <!-- menu -->
    @include('layouts.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div id="modalbox" class="example-modal">
            <div class="modal modal-info">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="javascript:CloseModalBox();">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Info Modal</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" onClick="javascript:CloseModalBox();">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->
    @include('layouts.admin.footer')

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- script -->
@include('layouts.admin.script')
@section('script')
@show
</body>
</html>
