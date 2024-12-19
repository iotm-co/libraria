@extends('layouts.app', ['title' => 'Create Testimony'])
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Add Testimony</h1>
        </div>
        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-dark" href="{{ route('testimonies.index') }}">Testimony Data</a>
                </li>
                <li class="breadcrumb-item active font-weight-bolder text-primary">Add Testimony</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Add Testimony Form</h1>
                    <span class="text-secondary">format table</span>
                </div>
                @foreach ($errors->all() as $item)
                    <div class="alert alert-danger" role="alert">
                        {{ $item }}
                    </div>
                @endforeach
                <form action="{{ route('testimonies.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="name" placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                        <div class="col-sm-10">
                            <select name="occupation" class="form-control" id="occupation" required>
                                <option value="" disabled selected>Choose Occupation</option>
                                <option value="student" {{ old('occupation') == 'student' ? 'selected' : '' }}>
                                    Student</option>
                                <option value="teacher" {{ old('occupation') == 'teacher' ? 'selected' : '' }}>
                                    Teacher</option>
                                <option value="entrepreneur" {{ old('occupation') == 'entrepreneur' ? 'selected' : '' }}>
                                    Entrepreneur</option>
                                <option value="other" {{ old('occupation') == 'other' ? 'selected' : '' }}>
                                    Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="testimony" class="col-sm-2 col-form-label">Testimony</label>
                        <div class="col-sm-10">
                            <textarea name="testimony" class="form-control" id="testimony" rows="3" placeholder="testimo..." required>{{ old('testimony') }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('testimonies.index') }}"
                            class="btn btn-sm px-3 btn-secondary rounded-pill mr-2">Batal</a>
                        <button type="submit" class="btn btn-sm px-3 btn-primary rounded-pill">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
