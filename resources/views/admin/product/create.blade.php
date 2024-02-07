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
    		<form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
          @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Product Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Brand:</strong>
                        <input type="text" name="brand" class="form-control" placeholder="Brand">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Color:</strong>
                      <input type="text" name="color" class="form-control" placeholder="Color">
                  </div>
              </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Price:</strong>
                      <input type="number" name="price" class="form-control">
                  </div>
              </div>
                
              
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
        </form>
    	</div>
    	
    </div>
    <!-- /.row (main row) -->
@endsection
