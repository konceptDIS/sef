<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/images/logo-light.png')}}" class="logo-icon" alt="logo icon" style="width: 100px;">
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="mm-active">
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Site Content</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.setup')}}"><i class="bi bi-circle"></i>Basic Info</a></li>
                <li> <a href="#"><i class="bi bi-circle"></i>Users</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.posts')}}"><i class="bi bi-circle"></i>Posts</a>
                </li>
                <li> <a href="{{route('admin.categories')}}"><i class="bi bi-circle"></i>Categories</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">

                <div class="parent-icon"><i class="bi bi-body-text"></i>
                </div>
                <div class="menu-title">Media</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.images')}}"><i class="bi bi-circle"></i>Add Media</a>
                </li>
            </ul>
        </li>
        {{-- <li>
            <a href="#">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Carousels</div>
            </a>
        </li> --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Subsidiaries</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Team</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
