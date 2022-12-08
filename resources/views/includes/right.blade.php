<div class="col-sm-3">

    <!-- Form -->
    <div class="card">
        <div class="card-header p-b-0">
            <h5 class="card-title">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Log In
            </h5>
        </div>
        <div class="card-block">


            @auth()
                <a class="nav-link" href="{{ route('personal.main.index') }}">Личный кабинет</a>
            @endauth

            @guest()
                <a class="nav-link" href="{{ route('personal.main.index') }}">Войти</a><br>
                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            @endguest



        </div>
    </div>

    <!-- Progress Bars -->


    <div class="card">
        <div class="card-header p-b-0">
            <h5 class="card-title"><i class="fa fa-random" aria-hidden="true"></i> Топ Книги!</h5>
{{--            @foreach($likedPosts as $post)--}}
{{--                <img src="{{'storage/' . $post->preview_image }}" width="130" height="200">--}}
{{--            @endforeach--}}

        </div>

    </div>






</div><!--/Right Column -->
