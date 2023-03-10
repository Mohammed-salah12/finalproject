

@extends('cms.parent')

@section('title' , 'outhers')

@section('main-title' , 'Create outhers')

@section('sub-title' , 'create outhers')

@section('styles')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Data of seeders</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
              <div class="row">

                <div class="form-group col-md-6">
                  <label for="name_product">titel of seeders</label>
                  <input type="text" class="form-control" id="name_product" name="name_product" value="{{ $products->name_product}}" placeholder="titelt  of outhers" >
                </div>

                <div class="form-group col-md-6">
                  <label for="price_product">descreption of seeders</label>
                  <input type="text" class="form-control" id="price_product" name="price_product" placeholder="descreption of outhers" value="{{ $products->price_product }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="img">address of seeders</label>
                    <input type="file" class="form-control"id=" img" name="img" placeholder="Enter Date of outhers" >
                  </div>
                   </div>
              </div>




              <!-- /.card-body -->

              <div class="card-footer">
              <button type="button" onclick="performUpdate({{$products->id}})" class="btn btn-primary">Update</button>
                <a href="{{ route('products.index') }}" type="button" class="btn btn-info">Return Back</a>

              </div>
            </form>
          </div>
          <!-- /.card -->


        </div>
        <!--/.col (left) -->


        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection
@section('scripts')
<script>
    function performUpdate(id){

      let formData = new FormData();
      formData.append('name_product',document.getElementById('name_product').value);
      formData.append('price_product',document.getElementById('price_product').value);
      formData.append('img',document.getElementById('img').value);

      storeRoute('/cms/product/update-products/'+id , formData);
    }

  </script>
@endsection


