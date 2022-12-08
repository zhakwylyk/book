@extends('admin.layouts.main')

@section('content')

<div class="col-5">
        <a href="{{route('admin.tag.create') }}" type="button" class="btn btn-block btn-primary">Добавить</a>
     </div>

<br>
     <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                  <tr>
{{--                      <th>ID</th>--}}
                      <th>Тэги</th>
                      <th>Изменить</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($tag as $tag)
                  <tr>
{{--                      <td>{{$tag->id}}</td>--}}
                      <td>{{$tag->title}}</td>
{{--                      <td><a href="{{ route('admin.tag.show', $tag->id) }}">Tags</a></td>--}}
                      <td><a href="{{ route('admin.tag.edit', $tag->id) }}">Edit</a></td>
                      <td>
                     <form action="{{ route('admin.tag.delete', $tag->id) }}"
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
