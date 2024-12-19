@extends('layout.app')

@section('title', 'Books')

@section('content')
<div class="container mt-5">
        <div class="row">
            <!-- cover img -->
            <div class="col-sm-4">
                <img src="{{$book->cover}}" alt="Laskar-Pelangi"
                    class="img-fluid rounded">
            </div>
            <!-- detail book -->
            <div class="col-sm-8">
                <h3>Book Details</h3>
                <h3 class="mt-3">{{$book->title}}</h3>
                <p class="mt-4 text">
                    {{$book->description}}
                </p>
                <ul class="list-unstyled">
                    <li><strong>Author : </strong>{{$book->author}}</li>
                    <li><strong>Status : </strong>{{$book->status}}</li>
                    <li><strong>Published : </strong>{{$book->published_at}}</li>
                </ul>
                <div class="mt-3">
                    <a href="#" class="btn btn-warning">Pinjam Sekarang</a>
                    <a href="/books" class="btn btn-primary">Kembali Ke Library</a>
                </div>
            </div>
        </div>
    </div>
@endsection
