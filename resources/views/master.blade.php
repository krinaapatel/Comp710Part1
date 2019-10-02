<!-- master.blade.php -->

<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Barbershop</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

  <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("/bower_components/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset("/bower_components/Ionicons/css/ionicons.min.css")}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset("/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset("/plugins/timepicker/bootstrap-timepicker.min.css")}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset("/bower_components/select2/dist/css/select2.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/dist/css/AdminLTE.min.css")}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="{{ asset("/dist/css/skins/_all-skins.min.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">

  <!-- jQuery 3 -->
  <!-- Multiple select dropdown -->
  <link rel="stylesheet" type="text/css" href="{{ asset("css/multi-select.css")}}">
  <script src="{{ asset("js/jquery.multi-select.js")}}"></script>
  <script src="{{ asset("js/pair-select.min.js")}}"></script>
  <script src="{{ asset("js/main.js")}}"></script>

  <!-- Multiple select dropdown -->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>

    .entry:not(:first-of-type)
    {
        margin-top: 10px;
    }

    .glyphicon
    {
        font-size: 12px;
    }
    </style>
    @yield('stylesheets')
</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    @include('partials.header')
     @include('flash-message')
    @yield('content')

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">Barbershop</a>.</strong> All rights
    reserved.
  </footer>

   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
<!-- ./wrapper -->


<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


<!-- bootstrap datepicker -->
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
<!-- <script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script> -->


<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- Page script -->
{{--  --}}

<!-- add element -->

{{-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script> --}}

<script src="{{asset('js/form.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable(
	{
		"scrollX": true
	})
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
	  "scrollX" : true

    })
  })
</script>
<script>

  function myFunction() {
    var x = document.getElementById("fields");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}



</script>
@yield('scripts')
</body>
</html>
