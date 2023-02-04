 @extends('cms.parent')

@section('title' , 'contact')

@section('main-title' , 'Create contact')

@section('sub-title' , 'create contact')

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
                  <label for="name">name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter First Name of Admin">
                </div>

                <div class="form-group col-md-6">
                  <label for="massege">massege</label>
                  <input type="text" class="form-control" id="massege" name="massege" placeholder="Enter Last Name of Admin">
                </div>
              </div>




              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                <a href="{{ route('contacts.index') }}" type="button" class="btn btn-info">Return Back</a>

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
      formData.append('name',document.getElementById('name').value);
      formData.append('massege',document.getElementById('massege').value);

      store('/cms/product/contacts' , formData);
    }

  </script>
@endsection
