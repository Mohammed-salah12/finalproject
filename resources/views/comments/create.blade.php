@extends('contacts.pearant')
@section('stylee')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('store/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">



  </head>

  <body>


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
                                <button type="button" onclick="performStore()" class="btn btn-primary">add</button>

                              </div>
                            </form>
                          </div>



            </div>
  

    <script src="{{ asset('store/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('store/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

    <script>
        function performStore(){

            let formData = new FormData();

          formData.append('name',document.getElementById('name').value);
          formData.append('comment',document.getElementById('comment').value);
          formData.append('img',document.getElementById('img').files[0]);
          store('/cms/product/comments' , formData);
        }

      </script>

  </body>
@endsection

@section('script')
