@extends('personal.layouts.main')

@section('content')


{{--        <h1 class="m-0">Коментарии</h1>--}}







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


                  <h1 class="m-0">Редактировать</h1>
                  <br>

                  <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST" class="w-50">
                      @csrf
                      @method('PATCH')
                      <textarea class="form-control" name="message" cols="30" rows="10">{{ $comment->message }}</textarea>

                   @error('message')
                      <div class="text-danger">Бул жакты толтурушун керек!</div>
                   @enderror
                      <button type="submit" class="btn btn-primary" value="Изменить">Submit</button>
                  </form>

              </div>



          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->

@endsection
