@extends('admin.layouts.main')

@section('content')

<div class="col-5">
        <a href="{{route('admin.post.create') }}" type="button" class="btn btn-block btn-primary">Добавить</a>
     </div>

<br>
     <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>title</th>
                      <th>Изменить</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $post)
                  <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->title}}</td>


                      <td><a href="{{ route('admin.post.edit', $post->id) }}">Edit</a></td>
                      <td>
                     <form action="{{ route('admin.post.delete', $post->id) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="border-0 bg-transparent" ><i class="fas fa-trash text-danger" role="button"></i></form>
                  </button>
                </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>

                      <div class="mx-auto" style="margin-top: 10px;">
                          {{ $posts->links() }}
                      </div>

              </div>


              <!-- /.card-body -->
            </div>


     @endsection
