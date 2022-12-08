
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


<!-- Добавить user -->

<h1 class="m-0">Редактировать</h1>
<br>

    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="w-50">
      @csrf
      @method('PATCH')
    <input type="text" class="form-control" name="name" placeholder="Названия" value="{{ $user->name }}"><br>
    <input type="text" class="form-control" name="email" placeholder="Названия" value="{{ $user->email }}"><br>

    <div class="form-group w-50" >
                        <label>Выберите пользователя</label>
                        <select name="role" class="form-control">
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ $id = $user->role ? ' selected' : '' }}>{{ $role }}</option>
                    @endforeach
                    </select>
                      </div>

    <button type="submit" class="btn btn-primary" value="Изменить">Submit</button>
    </form>


   <!-- Добавить категории -->

     @endsection


