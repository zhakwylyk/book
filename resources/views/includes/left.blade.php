<div class="col-sm-3">

    <!-- Категории -->
    <div class="card">
        <div class="card-header p-b-0">
            <h5 class="card-title"><i class="fa fa-random" aria-hidden="true"></i> Категории</h5>
        </div>
{{--        @foreach($categories as $category)--}}
{{--        <div class="list-group list-group-flush">--}}
{{--            <a href="{{ route('post.category', $category->title) }}" class="list-group-item list-group-item-action"> {{$category->title }}</a>--}}
{{--        </div>--}}
{{--        @endforeach--}}
    </div>

    <!-- Категории -->


    <!-- Тэги -->
    <div class="card">
        <div class="card-header p-b-0">
            <h5 class="card-title">
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                Тэги
            </h5>
        </div>
        <div class="card-block">

            <div class="btn-group btn-group-sm" role="group">
                <button type="button" class="btn btn-secondary">Resource</button>

            </div>
        </div>
    </div>

</div><!--/Left Column-->
