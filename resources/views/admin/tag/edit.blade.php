
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

<h1 class="m-0">Редактировать</h1>
<br>

    <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" class="w-50">
      @csrf
      @method('PATCH')
    <input type="text" class="form-control" name="title" placeholder="Названия" value="{{ $tag->title }}"><br>
    <button type="submit" class="btn btn-primary" value="Изменить">Submit</button>
    </form>

    
   <!-- Добавить категории --> 

     @endsection
  

  