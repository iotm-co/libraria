@extends('layouts.app', ['title' => 'Hero Image Data'])
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Hero Image Table : {{ count($carouselImages) }}</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item font-weight-bold text-primary">Hero Image Data</li>
            </ol>
        </nav>
        <!-- Content Row -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Hero Image List Table</h6>
                <a href="{{ route('carousel-images.create') }}"
                    class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-sm text-white-50"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" width="1%">No</th>
                                <th class="text-center">Image</th>
                                <th>Title</th>
                                <th class="text-center">Position</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carouselImages as $item)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ getCaraouselImage($item->image_path) }}" alt="{{ $item->title }}"
                                            class="img-fluid img-thumbnail"
                                            style="width: 100px; height: 100px; border-radius: 5px; object-fit: cover; object-position: center;">
                                    </td>
                                    <td><b class="text-capitalize">{{ $item->title }}</b></td>
                                    <td class="text-center">{{ $item->order_position }}</td>
                                    <td class="text-center">
                                        <span
                                            class="badge text-capitalize {{ getColorCarousel($item->is_active) }}">{{ getStatusCarousel($item->is_active) }}</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-inline-flex">
                                            <a href="{{ route('carousel-images.edit', $item) }}"
                                                class="btn btn-sm btn-warning mr-1">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <button type="button" data-toggle="modal"
                                                data-target="#delCarousel{{ $item->id }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="delCarousel{{ $item->id }}" tabindex="-1"
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
                                                        <form action="{{ route('carousel-images.destroy', $item->id) }}"
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
                </div>
            </div>
        </div>

        <!-- Delete Camp Modal-->


    </div>
@endsection
