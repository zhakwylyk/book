
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

    <form action="{{ route('admin.user.store') }}" method="POST" class="w-50">
      @csrf
    <input type="text" class="form-control" name="name" placeholder="Имя"><br>
    <input type="text" class="form-control" name="email" placeholder="E-mail"><br>
        <input type="text" class="form-control" name="password" placeholder="Password"><br>


    <div class="form-group w-50" >
                        <label>Выберите роль</label>
            <select name="role" class="form-control">
                @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ $id = old('role_id') ? ' selected' : '' }}
                    >{{ $role }}</option>
                @endforeach
            </select>
                      </div>


    <button type="submit" class="btn btn-primary" value="Добавить">Submit</button>
    </form>


   <!-- Добавить категории -->

     @endsection


