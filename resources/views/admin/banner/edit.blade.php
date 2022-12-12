
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

    <form action="{{ route('admin.banner.update', $ads->id) }}" method="POST" class="w-50">
      @csrf
      @method('PATCH')
        <textarea class="form-control" name="banner1" cols="30" rows="10">{{ $ads->banner1 }}</textarea>

        <textarea class="form-control" name="banner2" cols="30" rows="10">{{ $ads->banner2 }}</textarea>

        <textarea class="form-control" name="banner3" cols="30" rows="10">{{ $ads->banner3 }}</textarea>

        <textarea class="form-control" name="banner4" cols="30" rows="10">{{ $ads->banner4 }}</textarea>

    <button type="submit" class="btn btn-primary" value="Изменить">Submit</button>
    </form>


   <!-- Добавить категории -->

     @endsection


