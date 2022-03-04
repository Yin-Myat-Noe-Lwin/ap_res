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
          <h3 class="box-title">Orders List</h3>
        </div>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
       @endif
<div class="box-body">

<table id="dishes" class="table table-bordered table-striped">
<thead>
<tr>
<th>Dish Name</th>
<th>Table Number</th>
<th>Status</th>
<th>Actions</th>

</tr>
</thead>
<tbody>
    @foreach($orders as $order)
    <tr>
    <td>{{$order->dish->name}}</td>
      <td>{{$order->table_id}}</td>
      <td>{{$status[$order->status]}}</td>
      <td>
        <div>
        <a href="/order/{{$order->id}}/approve" class="btn btn-warning">Approve</a>
        <a href="/order/{{$order->id}}/cancel" class="btn btn-danger">cancel</a>
        <a href="/order/{{$order->id}}/ready" class="btn btn-success">Ready</a>
       </div>
      </td>
   </tr>
   @endforeach
</tbody>

</table>
</div>

</div>

</div>
         


@endsection
<script src="plugins/jquery/jquery.min.js"></script>

<script>
  $(function () {
    $('#dishes').DataTable({
      'paging'      : true,
      'searching':false,
      "pageLength":   5,
      'lengthChange': false,
      'ordering'    : true,
      'info'        : true
    });
  });
</script>