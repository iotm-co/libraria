@extends('layouts.app', ['title' => 'Book Data'])
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Testimony Table : {{ count($testimonies) }}</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item font-weight-bold text-primary">Testimony Data</li>
            </ol>
        </nav>
        <!-- Content Row -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Testimony List Table</h6>
                <div class="d-flex align-items-center">
                    <small class="mr-2 d-inline-block {{ count($testimonies) >= 3 ? 'text-danger' : '' }}">Maksimal 3
                        data</small>
                    @if (count($testimonies) < 3)
                        <a href="{{ route('testimonies.create') }}"
                            class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i>
                        </a>
                    @else
                        <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" disabled>
                            <i class="fas fa-plus fa-sm text-white-50"></i>
                        </button>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" width="1%">No</th>
                                <th class="text-center">Avatar</th>
                                <th>Name</th>
                                <th class="text-center">Occupation</th>
                                <th class="w-50">Testimony</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonies as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <img src="{{ getAvatar($item->avatar) }}" alt="{{ $item->name }}"
                                            class="img-fluid img-thumbnail"
                                            style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; object-position: center;">
                                    </td>
                                    <td><b class="text-capitalize">{{ $item->name }}</b></td>
                                    <td class="text-center text-capitalize">{{ $item->occupation }}</td>
                                    <td>
                                        <div>{{ $item->testimony }}</div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-inline-flex">
                                            <a href="{{ route('testimonies.edit', $item) }}"
                                                class="btn btn-sm btn-warning mr-1">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <button type="button" data-toggle="modal"
                                                data-target="#delTestimony{{ $item->id }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="delTestimony{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="modalCamp" aria-modal="true" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCamp">{{ $item->name }}</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-capitalize">apakah anda yakin ingin menghapus data
                                                            {{ $item->name }} ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Batal</button>
                                                        <form action="{{ route('testimonies.destroy', $item->id) }}"
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
