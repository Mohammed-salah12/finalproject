@extends('cms.parent')

@section('title' , 'Admin')

@section('main-title' , 'Edit Admin')

@section('sub-title' , 'Edit Admin')

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
              <h3 class="card-title">Edit Data of Admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-12">
                  <label for="Iogo">logo of company</label>
                  <input type="file" class="form-control" id="logo" name="logo" placeholder="Enter Date of Admin">
                </div>
                 </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$companies->id}})" class="btn btn-primary">update</button>
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
    function performUpdate(id){

      let formData = new FormData();
      formData.append('logo',document.getElementById('logo').files[0]);

      storeRoute('/cms/product/update-comments/'+id ,formData);
    }

  </script>
@endsection
