<!DOCTYPE html>
<html>
<head>

@include('admin.global.head')
  
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('admin.global.navbar')

  @include('admin.global.sidebar')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>

  @include('admin.global.footer')

</div>
<!-- ./wrapper -->
@include('admin.global.foot')
</body>
</html>
