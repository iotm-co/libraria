    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="{{request()->routeIs('home') ? 'active' : ''}} nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="{{request()->routeIs('front.about') ? 'active' : ''}} nav-link" href="{{route('front.about')}}">About</a></li>
                    <li class="nav-item"><a class="{{request()->routeIs('front.contact') ? 'active' : ''}} nav-link" href="{{route('front.contact')}}">Contacts</a></li>
                </ul>
            </div>
        </div>
    </nav>