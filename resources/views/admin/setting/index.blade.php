@extends('admin.layouts.main')

@section('content')


    <br>
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    {{--                      <th>ID</th>--}}
                    <th>Сайт названия</th>
                    <th>Изменить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($settings as $setting)
                    <tr>

                        <td>{{$setting->logo}}</td>

                        <td><a href="{{ route('admin.setting.edit', $setting->id) }}">Edit</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>


@endsection
