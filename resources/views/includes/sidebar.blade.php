<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
        <img class="img-profile rounded-circle mr-3"
            style="width: 45px; height: 45px; object-fit: cover; object-position: center;"
            src="{{ asset('assets/img/logo-ab.jpeg') }}">
        <div class="sidebar-brand-text">Libraria</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->url('/dashboard') == url('/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - hero image -->
    <li class="nav-item {{ Route::is('carousel-images*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('carousel-images.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Hero Image</span></a>
    </li>

    <!-- Nav Item - books -->
    <li class="nav-item {{ Route::is('books*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('books.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>List Book</span></a>
    </li>

    <!-- Nav Item - testimony -->
    <li class="nav-item {{ Route::is('testimonies*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('testimonies.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>List Testimony</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Other
    </div>

    <!-- Nav Item - testimony -->
    <li class="nav-item {{ Route::is('abouts*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('abouts.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>About Us</span></a>
    </li>

    <li class="nav-item mb-5 {{ Route::is('contacts*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contacts.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Contact Us</span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
