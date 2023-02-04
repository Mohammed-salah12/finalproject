 @extends('cms.parent')

@section('title' , 'Comment')

@section('main-title' , 'Create Comment')

@section('sub-title' , 'create Comment')

@section('styles')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->

            <!-- /.card-header -->
            <!-- form start -->
            <form>

              <div class="card-body">
              <div class="row">

                <div class="form-group col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title"> Create Comments </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                          <div class="card-body">
                            <div class="form-group">



                              <label for="name"> name</label>
                              <input type="text" class="form-control"  name="name"  id="name" placeholder="Enter name">
                            </div>
                            <label for="comment"> comment</label>
                            <input type="text" class="form-control"  name="comment"  id="comment" placeholder="Enter comment">
                          </div>




                <div class="form-group ">
                    <label for="img">img</label>

                    <input type="file" class="form-control"  id="img" name="img" placeholder="">
                </div>



                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                            <a href="{{ route('comments.index') }}" type="button" class="btn btn-info">Return Back</a>

                          </div>
                        </form>
                      </div>


              <!-- /.card-body -->


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
      formData.append('comment',document.getElementById('comment').value);
      formData.append('img',document.getElementById('img').files[0]);
      store('/cms/product/comments' , formData);
    }

  </script>
@endsection
