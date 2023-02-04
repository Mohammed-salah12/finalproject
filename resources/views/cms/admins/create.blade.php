
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

                <div class="form-group col-md-6">
                  <label for="first_name">First Name of Admin</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name of Admin">
                </div>

                <div class="form-group col-md-6">
                  <label for="last_name">Last Name of Admin</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name of Admin">
                </div>
              </div>

                 <div class="row">

                <div class="form-group col-md-6">
                  <label for="email">Email of Admin</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email of Admin">
                </div>

                <div class="form-group col-md-6">
                  <label for="password"> password of Admin</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password of Admin">
                </div>
              </div>

            <div class="row">

                <div class="form-group col-md-6">
                  <label for="mobile">Mobile of Admin</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile of Admin">
                </div>
          </div>


                 <div class="row">

                  <div class="form-group col-md-12">
                  <label for="img">Image of Admin</label>
                  <input type="file" class="form-control" id="img" name="img" placeholder="Enter Date of Admin">
                </div>
                 </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                <a href="{{ route('admins.index') }}" type="button" class="btn btn-info">Return Back</a>

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
      formData.append('first_name',document.getElementById('first_name').value);
      formData.append('last_name',document.getElementById('last_name').value);
      formData.append('email',document.getElementById('email').value);
      formData.append('password',document.getElementById('password').value);
      formData.append('mobile',document.getElementById('mobile').value);
      formData.append('img',document.getElementById('img').files[0]);


      store('/cms/product/admin' , formData);
    }

  </script>
@endsection
