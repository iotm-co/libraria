@extends('layouts.front', ['title' => 'Libraria | Home'])
@section('content')


    <!-- carausel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($hero as $key => $item)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                        class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $key + 1 }}">
                    </button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($hero as $key => $item)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-bs-interval="5000">
                        <div class="ratio ratio-16x9">
                            <img src="{{ getCaraouselImage($item->image_path) }}" class="d-block w-100"
                                style="object-fit: cover;" alt="{{ $item->title }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <!-- end -->

    <!-- books popular  -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Books Popular</h2>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">

            <!-- books -->
            @foreach ($books as $item)
            <div class="col">
                <div class="card">
                    <img src="{{ getCoverBook($item->cover) }}" class="card-img-top" alt="laskar-pelangi">
                    <div class="card-body">
                        <h5 class="line-clamp card-title">{{$item->title}}</h5>
                        <p class="line-clamp card-title">Author: {{$item->author}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end books -->
        </div>
    </div>
    <!-- end -->

    <!-- testimonial -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold">Apa yang pengguna kami katakan tentang kami</h2>
            <p class="text-muted">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia.</p>
            
            <!-- card -->
            <div class="row mt-5">

                @foreach ($testimonials as $item)
                <div class="col-md-4 mb-2">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center ">
                            <img src="{{ getAvatar($item->avatar) }}" alt="User 1" class="rounded-circle mb-3">
                            <h5 class="fw-bold">{{$item->name}}</h5>
                            <p class="text-primary mb-2">{{$item->occupation}}</p>
                            <p class="text-muted">{{$item->testimony}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            <!-- end -->
        </div>
    </section>
    <!-- end -->


@endsection
