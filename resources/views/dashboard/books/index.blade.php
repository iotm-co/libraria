@extends('layouts.app', ['title' => 'Book Data'])
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Book Table : {{ count($books) }}</h1>
            {{-- <form action="" class="d-flex" role="search" method="get">
                <select class="form-select form-control mr-2" name="jurusan" aria-label="Default select example">
                    <option selected value="">Pilih Jurusan</option>
                    <option value="IPA" {{ request()->jurusan == 'IPA' ? 'selected' : '' }}>IPA</option>
                    <option value="IPS" {{ request()->jurusan == 'IPS' ? 'selected' : '' }}>IPS</option>
                    <option value="Bahasa" {{ request()->jurusan == 'Bahasa' ? 'selected' : '' }}>Bahasa</option>
                </select>
                <input class="form-control mr-2" type="search" autofocus="" value="{{ request()->q }}"
                    placeholder="Search" aria-label="Search" name="q">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form> --}}
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item font-weight-bold text-primary">Book Data</li>
            </ol>
        </nav>
        <!-- Content Row -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Book List Table</h6>
                <a href="{{ route('books.create') }}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-sm text-white-50"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" width="1%">No</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th class="text-center">Published</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($books as $item)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration + ($books->currentPage() - 1) * $books->perPage() }} </td>
                                    <td><b class="text-capitalize">{{ $item->title }}</b></td>
                                    <td>{{ $item->author }}</td>
                                    <td class="text-center">{{ formatSlash($item->published_at) }}</td>
                                    <td class="text-center">
                                        <span
                                            class="badge text-capitalize {{ getColorBook($item->status) }}">{{ $item->status }}</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-inline-flex">
                                            <button type="button" data-toggle="modal"
                                                data-target="#showBook{{ $item->slug }}"
                                                class="btn btn-sm btn-info mr-1"><i class="fa fa-eye"
                                                    aria-hidden="true"></i></button>
                                            <a href="{{ route('books.edit', $item) }}" class="btn btn-sm btn-warning mr-1">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <button type="button" data-toggle="modal"
                                                data-target="#delBook{{ $item->slug }}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="showBook{{ $item->slug }}" tabindex="-1"
                                            aria-labelledby="modalCamp" aria-modal="true" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCamp"> {{ $item->title }}</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card m-auto" style="width: 18rem;">
                                                            <img src="{{ getCoverBook($item->cover) }}"
                                                                class="card-img-top img-fluid" alt="{{ $item->title }}"
                                                                style="height: 300px; object-fit: cover; object-position: center;">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $item->title }}</h5>
                                                                <hr>
                                                                <p class="card-text">
                                                                    {{-- <b>Author :</b> {{ $item->author }} <br> --}}
                                                                    {{-- <b>Published :</b> {{ formatSlash($item->published_at) }} <br>
                                                                    <b>Status :</b> <span
                                                                        class="badge text-capitalize {{ getColorBook($item->status) }}">{{ $item->status }}</span>
                                                                    <br> --}}
                                                                    {{-- <b>Created At :</b> {{ $item->created_at->diffForHumans() }} --}}
                                                                    {{ $item->description }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="delBook{{ $item->slug }}" tabindex="-1"
                                            aria-labelledby="modalCamp" aria-modal="true" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCamp">{{ $item->title }}</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-capitalize">apakah anda yakin ingin menghapus data
                                                            {{ $item->title }} ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Batal</button>
                                                        <form action="{{ route('books.destroy', $item->slug) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class='px-4 mt-3'>{{ $books->links() }}</div>
                </div>
            </div>
        </div>

        <!-- Delete Camp Modal-->


    </div>
@endsection
