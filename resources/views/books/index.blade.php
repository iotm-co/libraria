@extends('layout.app')

@section('title', 'Books')

@section('content')
<div class="container my-4">
        <h3 class="mb-3 text-center">Library Books</h3>
        <p>Show All Books In Library.</p>

        <!-- form search -->
        <nav class="navbar d-flex justify-content-between">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <select class="form-select w-auto mt-3" name="" id="">
                    <option value="title">Author</option>
                    <option value="title">A</option>
                    <option value="title">B</option>
                    <option value="title">C</option>
                </select>
            </div>
        </nav>

        <!-- card -->
        <div class="row g-3" id="book-container">
            @foreach ($books as $item)
            <div class="col-6 col-md-4 col-lg-3 book" data-title="{{strtolower($item->title)}}">
                <div class="card ">
                    <a href="{{route('books.show', $item->id )}}"><img src="{{$item->cover}}" alt="laskar-pelangi" class="card-img-top"></a>
                    <div class="card-body">
                        <h5 class="card-title fs-6">{{$item->title}}</h5>
                        <p class="card-text text-muted">{{$item->author}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Select ID -->
        <div class="d-flex justify-content-center my-3 ">
            <div>
                <button class="btn btn-secondary filter-btn" onclick="filterBooks('b')">B</button>
                <button class="btn btn-secondary filter-btn" onclick="filterBooks('d')">D</button>
                <button class="btn btn-secondary filter-btn" onclick="filterBooks('f')">F</button>
                <button class="btn btn-secondary filter-btn" onclick="filterBooks('r')">R</button>
                <button class="btn btn-secondary filter-btn" onclick="filterBooks('t')">T</button>
                <button class="btn btn-secondary filter-btn" onclick="filterBooks('p')">P</button>
                <button class="btn btn-secondary filter-btn" onclick="filterBooks('')">All</button>
            </div>
        </div>

        <!-- add card -->
        <div class="mt-4">
            <button class="btn btn-danger">+ SUGGEST BOOK</button>
        </div>

    </div>
@endsection
