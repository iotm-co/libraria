@extends('layouts.app', ['title' => 'Edit Testimony'])
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Testimony</h1>
        </div>
        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-dark" href="{{ route('testimonies.index') }}">Testimony Data</a>
                </li>
                <li class="breadcrumb-item active font-weight-bolder text-primary">Edit Testimony</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Edit Testimony Form</h1>
                    <span class="text-secondary">format table</span>
                </div>
                @foreach ($errors->all() as $item)
                    <div class="alert alert-danger" role="alert">
                        {{ $item }}
                    </div>
                @endforeach
                <form action="{{ route('testimonies.update', $testimony) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label for="cover" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <div id="cover-preview">
                                <img id="cover-image" src="{{ getAvatar($testimony->avatar) }}" alt="Cover Preview"
                                    class="img-fluid img-thumbnail mb-3" style="max-width: 130px; border-radius: 50%;" />
                            </div>
                            <input type="file" name="avatar" class="form-control" id="avatar"
                                onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name', $testimony) }}" class="form-control"
                                id="name" placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                        <div class="col-sm-10">
                            <select name="occupation" class="form-control" id="occupation" required>
                                <option value="student"
                                    {{ old('occupation', $testimony->occupation) == 'student' ? 'selected' : '' }}>
                                    Student</option>
                                <option value="teacher"
                                    {{ old('occupation', $testimony->occupation) == 'teacher' ? 'selected' : '' }}>
                                    Teacher</option>
                                <option value="entrepreneur"
                                    {{ old('occupation', $testimony->occupation) == 'entrepreneur' ? 'selected' : '' }}>
                                    Entrepreneur</option>
                                <option value="other"
                                    {{ old('occupation', $testimony->occupation) == 'other' ? 'selected' : '' }}>
                                    Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="testimony" class="col-sm-2 col-form-label">Testimony</label>
                        <div class="col-sm-10">
                            <textarea name="testimony" class="form-control" id="testimony" rows="3" placeholder="testimo..." required>{{ old('testimony', $testimony->testimony) }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('testimonies.index') }}"
                            class="btn btn-sm px-3 btn-secondary rounded-pill mr-2">Batal</a>
                        <button type="submit" class="btn btn-sm px-3 btn-primary rounded-pill">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // Function to preview image
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const imagePreview = document.getElementById("cover-image");
                const previewContainer = document.getElementById("cover-preview");
                imagePreview.src = reader.result;
                previewContainer.style.display = "block";
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
