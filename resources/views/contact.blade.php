@extends('layouts.front', ['title' => 'Libraria | Contact'])
@section('content')
    <!-- contact -->
    <div class="container contact-container my-5 bg-light rounded">
        <div class="row w-100 my-5 px-5">
            <!-- form -->
            <div class="col-lg-6 mb-4 mb-lg-0 rounded px-5">
                <div class="contact-form">
                    <h2 class="mb-4">Hubungi Kami</h2>
                    <p>Jangan ragu untuk menghubungi kami kapan saja. Kami akan segera menghubungi Anda!</p>
                    <form action="{{route('contacts.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan Name ">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan Email ">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea name="message" id="pesan" class="form-control" rows="4"
                                placeholder="Tulis Pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Kirim</button>
                    </form>
                </div>
            </div>
            <!-- sosial media -->
            <div class="col-lg-6 bg-dark text-light rounded p-5 ">
                <div class="contact-info">
                    <h3 class="mb-4">Info</h3>
                    <div class="info-box " >
                        <i class="bi bi-envelope"></i>
                        <p>iotm2024@gmail.com</p>
                    </div>
                    <div class="info-box">
                        <i class="bi bi-whatsapp"></i>
                        <p>089-521-530-385</p>
                    </div>
                    <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <p>Kraksaan</p>
                    </div>
                    <div class="info-box">
                        <i class="bi bi-clock"></i>
                        <p>09:00 - 18:00</p>
                    </div>
                </div>
            </div>
            <!-- end -->
        </div>
    </div>
    <!-- end -->
@endsection
