@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kitchen Panel</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            
          <div class="box">

<div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
</div>

<div class="box-body">
<table id="dishes" class="table table-bordered table-striped">
<thead>
<tr>
<th>Rendering engine</th>
<th>Browser</th>
<th>Platform(s)</th>
<th>Engine version</th>
<th>CSS grade</th>
</tr>
</thead>
<tbody>
    
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

</tbody>

</table>
</div>

</div>

</div>
         


@endsection

<script>
  $(function () {
    $('#dishes').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true
    })
  })
</script>