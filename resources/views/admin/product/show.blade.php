@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('body')
<!-- Main row -->
<div class="row">
  <h1 class="text-center">Product details</h1>
  <div class="container-fluid border">
    <table id="example" class="table table-striped border mt-2 " style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Product Name</th>
          <th>Brand</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->brand }}</td>
          <td>{{ $product->price }}</td>
          <td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- /.row (main row) -->
@endsection