<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

 {{ view($main_css) }}

  @if($css)
    {{ view($css) }}
  @endif;
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 {{ view($navbar) }}

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
{{ view($content)}}
</div>
  <!-- /.content-wrapper -->
{{ view($footer) }}
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 {{ view($main_aset) }}

 @if($aset != '')
    {{ view($aset)}}
@endif;
</body>
</html>
