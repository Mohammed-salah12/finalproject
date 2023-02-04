
@extends('cms.parent')


@section('title' , 'Admin')

@section('main-title' , 'Create Admin')

@section('sub-title' , 'create Admin')

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
              <h3 class="card-title">Create Data of Admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">




                 <div class="row">

                  <div class="form-group col-md-12">
                  <label for="logo">logo</label>
                  <input type="file" class="form-control" id="logo" name="logo" placeholder="Enter Date of Admin">
                </div>
                 </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                <a href="{{ route('companies.index') }}" type="button" class="btn btn-info">Return Back</a>

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
    function performStore(){

      let formData = new FormData();
      formData.append('logo',document.getElementById('logo').files[0]);


      store('/cms/product/companies' , formData);
    }

  </script>
@endsection
