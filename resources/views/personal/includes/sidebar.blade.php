

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
            <a href="{{ route('personal.main.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Консоль
              </p>
            </a>
          </li>

            <li class="nav-item">
                <a href="{{ route('personal.post.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Пост
                    </p>
                </a>
            </li>



            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Коментарии
                    </p>
                </a>
            </li>













        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



