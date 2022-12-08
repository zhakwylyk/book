@extends('personal.layouts.main')

@section('content')

    <div class="col-5">
        <a href="{{route('personal.post.create') }}" type="button" class="btn btn-block btn-primary">Добавить</a>
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
                    <th>Пост</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>

                        <td><a href="{{ route('personal.post.show', $post->id) }}">Post</a></td>

                        <td>
                            <form action="{{ route('personal.post.delete', $post->id) }}"
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
        </div>
        <!-- /.card-body -->
    </div>

@endsection
