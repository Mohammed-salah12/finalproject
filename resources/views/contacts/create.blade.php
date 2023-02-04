@extends('contacts.pearant')
@section('stylee')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('store/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">



  </head>

  <body>

    <!-- Navigation -->
@section('content')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('store.home') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Contact Form -->

          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name" id="name">
                <p class="help-block"></p>
              </div>
            </div>
        
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="massege" name="massege"  maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id=""></div>
            <!-- For success/fail messages -->
            <button type="button" class="btn btn-primary" onclick="performStore()">Send Message</button>
          </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->



      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->

    <script src="{{ asset('store/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('store/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

    <script>
        function performStore(){

          let formData = new FormData();
          formData.append('name',document.getElementById('name').value);
          formData.append('massege',document.getElementById('massege').value);

          store('/cms/product/contacts' , formData);
        }

      </script>
  </body>
@endsection

@section('script')
