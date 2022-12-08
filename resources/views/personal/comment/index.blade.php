@extends('personal.layouts.main')

@section('content')


        <h1 class="m-0">Коментарии</h1>







    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">



        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">

              <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>title</th>
                          <th>Просмотр</th>
                      </tr>
                      </thead>
                      <tbody>


                      @foreach($comments as $comment)
                          <tr>
                              <td>{{$comment->id}}</td>
                              <td>{{$comment->message}}</td>
                              <td class="text-center"><a href="{{ route('personal.comment.edit', $comment->id) }}" class="text-success">Edit</a> </td>
                              <td class="text-center">
                               <form action="{{ route('personal.comment.delete', $comment->id) }}"
                                     method="POST">
                                   @csrf
                                   @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                               </form>
                              </td>
                          </tr>
                      @endforeach



                      </tbody>
                  </table>
              </div>



          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
