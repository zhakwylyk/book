@extends('admin.layouts.main')

@section('content')

    <div class="col-5">
        <a href="{{route('admin.user.create') }}" type="button" class="btn btn-block btn-primary">Добавить</a>
    </div>

    <br>
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{ route('admin.user.show', $user->id) }}">User</a></td>
                        <td><a href="{{ route('admin.user.edit', $user->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('admin.user.delete', $user->id) }}"
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
