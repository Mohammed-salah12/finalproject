@extends('cms.parent')

@section('title' , ' Admin')

@section('main-title' , 'Index Comment')

@section('sub-title' , 'index Comment')

@section('styles')

@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                {{-- <h3 class="card-title"> Index Data of ddd</h3> --}}


                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>img </th>
                      <th>name </th>
                      <th>comment</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($comments as $comment )
                    {{-- <td><span class="tag tag-success">Approved</span></td> --}}

                    <tr>
                         <td>{{$comment->id}}</td>
                         <td>
                            <img class="img-circle img-bordered-sm" src="{{asset('storage/images/Comment/'.$comment->img)}}" width="60" height="60" alt="User img">
                         </td>
                        <td>{{$comment->name}}</td>
                        <td>{{ $comment->comment }}</td>



                        <td>
                            <div class="btn group">
                             <div class="btn group">
                                    <a href="{{route('comments.edit' , $comment->id)}}" type="button" class="btn btn-info">
                                      <i class="fas fa-edit"></i>
                              </a>
                              <a href="#" type="button" onclick="performDestroy({{ $comment->id }} , this)" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                              </a>

                            </div>
                          </td>

                        <td></td>
                      </tr>
                    @endforeach


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            {{ $comments->links()}}
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection


@section('scripts')
  <script>
    function performDestroy(id , referance){
      let url = '/cms/product/comments/'+id;
      confirmDestroy(url , referance );
    }
</script>
@endsection
