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
        Menu
    </div>

    <!-- Nav Item - books -->
    <li class="nav-item {{ Route::is('books*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('books.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Hero Image</span></a>
    </li>

    <!-- Nav Item - books -->
    <li class="nav-item {{ Route::is('books*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('books.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>List Book</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main
    </div>

    {{-- <li class="nav-item {{ Route::is('attendances*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('attendances.index') }}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Absensi</span></a>
    </li> --}}
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    {{-- @if (auth()->user()->role !== 'kepala_sekolah' && auth()->user()->role !== 'guru')
        <li class="nav-item {{ Route::is('academic-years*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('academic-years.index') }}">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Tahun Ajaran</span></a>
        </li>
    @endif --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li
            class="nav-item {{ Route::is('students*') || Route::is('studentX.index') || Route::is('studentXi.index') || Route::is('studentXii.index') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Siswa</span>
            </a>
            <div id="collapsePages"
                class="collapse {{ Route::is('students*') || Route::is('studentX.index') || Route::is('studentXi.index') || Route::is('studentXii.index') ? 'show' : '' }}"
                aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Menu:</h6>
                    <a class="collapse-item {{ Route::is('studentX.index') ? 'active' : '' }}"
                        href="{{ route('studentX.index') }}">Kelas X</a>
                    <a class="collapse-item {{ Route::is('studentXi.index') ? 'active' : '' }}"
                        href="{{ route('studentXi.index') }}">Kelas XI </a>
                    <a class="collapse-item {{ Route::is('studentXii.index') ? 'active' : '' }}"
                        href="{{ route('studentXii.index') }}">Kelas XII</a>
                </div>
            </div>
        </li> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
