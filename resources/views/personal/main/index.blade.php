@extends('personal.layouts.main')

@section('content')




        <h1 class="m-0">Самые читаемые книги за 2022 год </h1>
<br>

        @foreach($likedPosts as $post)
        <div class="row">
            <div class="col-sm">
                <img src="{{asset('storage/' . $post->preview_image) }}" width="200" height="290">
            </div>
            @endforeach





    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

















            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">




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
