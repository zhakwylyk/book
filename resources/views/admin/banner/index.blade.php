@extends('admin.layouts.main')

@section('content')


    <br>
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>

                    <th>Баннер</th>

                </tr>
                </thead>
                <tbody>
                @foreach($ads as $ad)
                    <tr>

                        <td>{{$ad->banner1}}</td>
                    <tr>
                        <td>{{$ad->banner2}}</td>
                    </tr>
                    <tr>
                        <td>{{$ad->banner3}}</td>
                    </tr>
                    <tr>
                        <td>{{$ad->banner4}}</td>
                    </tr>
                        <td>
                            <a href="{{ route('admin.banner.edit', $ad->id) }}">Edit</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>


@endsection
