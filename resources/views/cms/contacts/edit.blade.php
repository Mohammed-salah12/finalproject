

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
              <h3 class="card-title">Create Data of seeders</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
              <div class="row">

                <div class="form-group col-md-6">
                  <label for="name">titel of seeders</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $contacts->name}}" placeholder="titelt  of outhers" >
                </div>

                <div class="form-group col-md-6">
                  <label for="massege">descreption of seeders</label>
                  <input type="text" class="form-control" id="massege" name="massege" placeholder="descreption of outhers" value="{{ $contacts->massege }}">
                </div>






              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$contacts->id}})" class="btn btn-primary">Update</button>
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
@section('scripts')
  <script>
    function performUpdate(id){

      let formData = new FormData();
      formData.append('name',document.getElementById('name').value);
      formData.append('massege',document.getElementById('massege').value);


      storeRoute('/cms/product/update-contacts/'+id , formData);
    }

  </script>
@endsection
