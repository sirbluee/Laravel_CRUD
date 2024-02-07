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
  <h1 class="text-center">Product List</h1>
  <div class="container-fluid border py-3">
    <a href="{{ route('product.create') }}" class="btn btn-primary">Create New</a>
    <table id="example" class="table table-striped border mt-2 " style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Product Name</th>
          <th>Brand</th>
          <th>Price</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>Show</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->brand }}</td>
          <td>{{ $product->price }}</td>
          <td>
            <a class="btn btn-success" href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
          </td>
          <td>
            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
              @csrf
              @method('delete')
              <input type="submit" value="Delete" class="btn btn-danger" />
            </form>
          </td>
          <td>
    <a class="btn btn-success" href="{{ route('product.show', ['product' => $product->id]) }}">Show</a>
</td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- /.row (main row) -->
@endsection