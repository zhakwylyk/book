
@extends('admin.layouts.main')

@section('content')



<!-- Валидация -->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<!-- Валидация -->


<!-- Добавить категории -->

<h1 class="m-0">Добавить</h1>
<br>

    <form action="{{ route('admin.category.store') }}" method="POST" class="w-50">
      @csrf
    <input type="text" class="form-control" name="title" placeholder="Названия"><br>
    <button type="submit" class="btn btn-primary" value="Добавить">Submit</button>
    </form>


   <!-- Добавить категории -->

     @endsection


