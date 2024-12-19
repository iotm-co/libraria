@extends('layouts.app', ['title' => 'Contact Data'])
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Contact Table : {{ count($contacts) }}</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item font-weight-bold text-primary">Contact Data</li>
            </ol>
        </nav>
        <!-- Content Row -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Contact List Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" width="1%">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="w-50">Message</th>
                                <th>Create At</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td><b class="text-capitalize">{{ $item->name }}</b></td>
                                    <td> {{ $item->email }} </td>
                                    <td> {{ $item->message }} </td>
                                    <td> {{ $item->created_at->diffForHumans() }} </td>
                                    <td class="text-center">
                                        <div class="d-inline-flex">
                                            <button type="button" data-toggle="modal"
                                                data-target="#delCon{{ $item->id }}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="delCon{{ $item->id }}" tabindex="-1"
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
                                                        <form action="{{ route('contacts.destroy', $item->id) }}"
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
