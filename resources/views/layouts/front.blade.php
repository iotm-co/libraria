<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' | ' . 'Libraria' : 'Libraria' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
    <style>
        .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        /* about */
        .about-container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .h-custom {
            height: calc(100vh - 60px);
        }
        /* contanct */
        .card-body img{
            width: 25%;
        }
        .contact-container{
            /* border: solid 1px; */
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>

<body>
    @include('includes.frontsides.navbar')
    <div class="container">
        @yield('content')
    </div>
        <!-- footer -->
        <footer class="footer bg-light-bg-subtle text-dark p-2">
        <div class=" d-flex justify-content-around ">
            <p class=""><b> &copy; IOTM 2024</b> | Privacy Policy</p>
            <div class="row">
                <div class="col" d-flex align-items-center>
                    <a href="#"><img class="w-100" src="{{ asset('assets/img/icon/instagram.svg') }}" alt="instagram icon"></a>
                </div>
                <div class="col" d-flex align-items-center>
                    <a href="#"><img class="w-100" src="{{ asset('assets/img/icon/facebook.svg') }}" alt="facebook icon"></a>
                </div>
                <div class="col" d-flex align-items-center>
                    <a href="#"><img class="w-100" src="{{ asset('assets/img/icon/linkedin.svg') }}" alt="linkedin icon"></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
