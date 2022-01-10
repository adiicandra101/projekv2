<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="merk" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('backend/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('backend/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('backend/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.bagian.navbar')
        <!-- /.navbar-top-links -->

        <!-- /input-group -->
        @include('layouts.bagian.sidebar')
        <!-- /.nav-second-level -->
        </li>
        </ul>
    </div>
    </div>
    </nav>


    <!-- /.col-lg-12 -->
    {{-- TABLE --}}
    <<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nama Booking</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- TABLE -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Show Data Booking
                        </div>
                        <form Action="" method="post">
                            @csrf
                            @method('put')
                            <div class="panel-body">
                                <label>Kode Booking</label>
                                <input type="text" class="form-control" name="kode_booking" value="{{ $booking->kode_booking }}"disabled>
                                <label>tgl Booking</label>
                                <input type="text" class="form-control" name="tgl_booking" value="{{ $booking->tgl_booking }}"disabled>
                                <label>tgl mulai</label>
                                <input type="text" class="form-control" name="tgl_mulai" value="{{ $booking->tgl_mulai }}"disabled>
                                <label>tgl selesai</label>
                                <input type="text" class="form-control" name="tgl_selesai" value="{{ $booking->tgl_selesai }}"disabled>
                                <label>tgl kembali</label>
                                <input type="text" class="form-control" name="tgl_kembali" value="{{ $booking->tgl_kembali }}"disabled>
                                <label>Denda</label>
                                <input type="text" class="form-control" name="denda" value="{{ $booking->denda }}"disabled>
                                <label>durasi</label>
                                <input type="text" class="form-control" name="durasi" value="{{ $booking->durasi }}"disabled>
                                <label>status Booking</label>
                                <input type="text" class="form-control" name="status_booking" value="{{ $booking->status_booking }}"disabled>
                                <label>tgl bayar</label>
                                <input type="text" class="form-control" name="tgl_bayar" value="{{ $booking->tgl_bayar }}"disabled>
                                <label>tgl dp</label>
                                <input type="text" class="form-control" name="tgl_dp" value="{{ $booking->tgl_dp }}"disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        </div>
        {{-- /TABLE --}}
        <!-- /.row -->
        <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('backend/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('backend/js/raphael.min.js') }}"></script>
        <script src="{{ asset('backend/js/morris.min.js') }}"></script>
        <script src="{{ asset('backend/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('backend/js/startmin.js') }}"></script>

</body>

</html>
