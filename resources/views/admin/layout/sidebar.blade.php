<div class="dropdown sidebar-user m-1 rounded">
    <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-flex align-items-center gap-2">
            <img class="rounded header-profile-user" src="{{url('template')}}/assets/images/users/avatar-1.jpg" alt="Header Avatar">
            <span class="text-start">
                <span class="d-block fw-medium sidebar-user-name-text">{{auth()->user()->name}}</span>
                <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
            </span>
        </span>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <h6 class="dropdown-header">Selamat Datang {{auth()->user()->name}}</h6>
        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
        <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
        <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
        <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
        <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
        <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
    </div>
</div>
<div id="scrollbar">
    <div class="container-fluid">


        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link menu-link active" href="{{url('dashboard')}}">
                    <i class="ri-honour-line"></i> 
                    <span data-key="t-dashboard">Dashboard</span>
                </a>
            </li>
            @if (auth()->user()->role == 'superadmin')
            <li class="nav-item">
                <a class="nav-link menu-link" href="#">
                    <i class="ri-honour-line"></i> 
                    <span data-key="t-users">Kelola Admin</span>
                </a>
            </li>                
            @endif
        </ul>
    </div>
    <!-- Sidebar -->
</div>