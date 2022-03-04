<html>
<head>
        <title>Order Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<div class="card">

        <div class="card-body">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
       @endif

        <h3>Order Form</h3>

        <div class="input-group">
        <div class="form-outline">
        <form action="search" method="POST">
        @csrf
        <input type="search" name="search_dish" class="form-control" />
        </div>
        <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
        </button>
        </form>
        </div>
        <br>

        <div class="row">
        <div class="col-12 col-sm-6 col-lg-12">
        <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">New Order</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Order List</a>
        </li>
        </ul>
        </div>
        <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
        <form action="{{route('order.submit')}}" method="POST">
        @csrf 

        <div class="row">
        @foreach($dishes as $dish)
        
                <div class="col-sm-3">
                <div class="card">
                <div class="card-body">
                <img src="{{url('/images/'.$dish->image)}}" width=100 height=100><br>
                <label for="">{{$dish->name}}</label><br>
                <input type="number" value="" name="{{$dish->id}}"><br>   
                </div>
                </div>
                </div>
               
         @endforeach

        </div>

        <div class="form-group">
        <select name="table" id="">
                @foreach($tables as $table)
                <option class="form-control" value="{{$table->id}}">{{$table->number}}</option>
                @endforeach
        </select>

        </div>
        <input type="submit" class="btn btn-success" value="Submit">
        </form>
        </div>
        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                <table class="table table-bordered table-striped">
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
                        <a href="/order/{{$order->id}}/serve" class="btn btn-warning">Serve</a>
                </div>
                </td>
                </tr>
                @endforeach
                </tbody>

                </table>
        </div>
        </div>
        </div>


        </div>
</div>
</body>
<!-- REQUIRED SCRIPTS -->

<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../dist/js/demo.js"></script>
</html>