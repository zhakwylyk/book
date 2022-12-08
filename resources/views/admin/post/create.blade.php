
@extends('admin.layouts.main')

@section('content')
    <!-- Валидация -->

    <!-- Валидация -->


    <h1 class="m-0">Добавить</h1>
    <br>

    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">

        @error('content')
        <div class="text-danger">Тема кана? епт!</div>
        @enderror
        @csrf
        <input type="text" class="form-control" name="title" placeholder="Названия"><br>

        @error('content')
        <div class="text-danger">Текст кана? епт!</div>
        @enderror
        <div class="form-group" class="w-50">
            <textarea id="summernote" name="content"></textarea>
        </div>

        @error('content')
        <div class="text-danger">Фотка кана? епт!</div>
        @enderror

        <div class="col-sm-5">
            <div class="form-group">
                <label for="exampleInputFile">Добавить главное изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="preview_image">
                        <label class="custom-file-label">Выберите изображение</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Загрузка</span>
                    </div>
                </div>
            </div>
        </div>

        @error('content')
        <div class="text-danger">Танда епт!</div>
        @enderror


        <div class="form-group w-50" >
            <label>Выберите категории</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        @error('content')
        <div class="text-danger">Танда епт!</div>
        @enderror


        <div class="form-group w-50">
            <label>Выберите Тэги</label>
            <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Мета" style="width: 100%;">
                @foreach ($tag as $tag)

                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>




        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Добавить">Submit</button>
        </div>
    </form>



    <!-- Добавить категории -->

@endsection



