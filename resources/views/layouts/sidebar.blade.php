<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets/img/user.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ @\Auth::user()->name}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menus</li>
            <!-- Optionally, you can add icons to the links -->
           

        @if(Auth::user()->role=="admin")
           <li class="active"><a href="{{ url('/user') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="active"><a href="{{ url('/user') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <li class="active"><a href="{{ url('/getBooks') }}"><i class="fa fa-list"></i> <span>Books Manage</span></a></li>
            <li class="active"><a href="{{ url('/get_all') }}"><i class="fa fa-cubes"></i> <span>All Books</span></a></li>
        @else
        <li class="active"><a href="{{ url('/get_all') }}"><i class="fa fa-cubes"></i> <span>All Books</span></a></li>
        @endif








        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
