<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.home')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                  
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Category </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('admin.category.create')}}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Create Category </span></a></li>
                        <li class="sidebar-item"><a href="{{route('admin.category.index')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">View Category </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Portfolio </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('admin.portfolio.create')}}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Create Porfolio </span></a></li>
                        <li class="sidebar-item"><a href="{{route('admin.portfolio.index')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">View Portfolio </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Blog </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('admin.blog.create')}}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Create Blog </span></a></li>
                        <li class="sidebar-item"><a href="{{route('admin.blog.index')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">View Blog </span></a></li>
                    </ul>
                </li>
              
                <li class="sidebar-item"><a class="sidebar-link  waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>