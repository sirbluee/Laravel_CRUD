@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Products</h1>
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
      <h1 class="text-center">Product</h1>
    	<div class="container-fluid border py-3">
    		<form method="post" action="{{route('product.update', ['product' => $product])}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control"  value="{{$product->name}}" />
                </div>
                <div class="mb-3">
                    <label>Brand</label>
                    <input type="text" name="brand" class="form-control"  value="{{$product->brand}}" />
                </div>
                <div class="mb-3">
                  <label>Color</label>
                  <input type="text" name="color" class="form-control"  value="{{$product->color}}" />
              </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control"  value="{{$product->price}}" />
                </div>
                <div class="mb-3">
                  <input class="btn btn-success" type="submit" value="Update" />
              </div>
            
            </form>
    	</div>
    	
    </div>
    <!-- /.row (main row) -->
@endsection