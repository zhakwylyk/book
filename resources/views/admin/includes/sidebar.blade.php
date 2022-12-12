

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">



    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Перейти на сайт
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Консоль
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Пость
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Тэги
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        User
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.setting.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Изменить logo
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.banner.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Баннер
                    </p>
                </a>
            </li>



        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



