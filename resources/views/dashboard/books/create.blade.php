@extends('layouts.app', ['title' => 'Create Book'])
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Add Book</h1>
        </div>
        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-dark" href="{{ route('books.index') }}">Book Data</a>
                </li>
                <li class="breadcrumb-item active font-weight-bolder text-primary">Add Book</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Add Book Form</h1>
                    <span class="text-secondary">format table</span>
                </div>
                @foreach ($errors->all() as $item)
                    <div class="alert alert-danger" role="alert">
                        {{ $item }}
                    </div>
                @endforeach
                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                id="title" placeholder="The Magic of Thinking Big" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="autor" class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-10">
                            <input type="text" name="author" value="{{ old('author') }}" class="form-control"
                                id="author" placeholder="David J. Schwartz" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="published_at" class="col-sm-2 col-form-label">Published</label>
                        <div class="col-sm-10">
                            <input type="date" name="published_at" value="{{ old('published_at') }}" class="form-control"
                                id="published_at" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="description" rows="3"
                                placeholder="desc..." required>{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('books.index') }}"
                            class="btn btn-sm px-3 btn-secondary rounded-pill mr-2">Batal</a>
                        <button type="submit" class="btn btn-sm px-3 btn-primary rounded-pill">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
