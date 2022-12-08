
@extends('layouts.app')

@section('content')

    <div class="col-sm-6">

        <div class="footer-blurb">
            <div class="container">
                <div class="row">

                <ul>
                    <li>
                        @foreach($categories as $category)
                    <a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a>
                    </li>
                    @endforeach
                </ul>



                <!-- /.row -->
            </div>
        </div>

    </div><!--/Center Column-->

@endsection
