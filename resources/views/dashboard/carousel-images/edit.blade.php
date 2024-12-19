@extends('layouts.app', ['title' => 'Edit Hero Image'])
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Edit Hero Image</h1>
        </div>
        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Master</li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="text-dark" href="{{ route('carousel-images.index') }}">Hero Image Data</a>
                </li>
                <li class="breadcrumb-item active font-weight-bolder text-primary">Edit Hero Image</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h5 mb-0 text-gray-800 font-weight-bolder">Edit Hero Image Form</h1>
                    <span class="text-secondary">format table</span>
                </div>
                @foreach ($errors->all() as $item)
                    <div class="alert alert-danger" role="alert">
                        {{ $item }}
                    </div>
                @endforeach
                <form action="{{ route('carousel-images.update', $carouselImage->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label for="image_path" class="col-sm-2 col-form-label">Hero Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image_path" name="image_path" accept="image/*"
                                onchange="previewImage(event)" />
                            <!-- Preview Image -->
                            <div class="mt-3" id="cover-preview">
                                <img id="cover-image" src="{{ getCaraouselImage($carouselImage->image_path) }}"
                                    alt="Cover Preview" class="img-fluid img-thumbnail" style="max-width: 200px" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" value="{{ old('title', $carouselImage->title) }}"
                                class="form-control" id="title" placeholder="Image Title" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="order_position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <input type="number" name="order_position"
                                value="{{ old('position', $carouselImage->order_position) }}" class="form-control"
                                id="order_position" placeholder="3" min="1" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="is_active" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="is_active" class="form-control" id="is_active" required>
                                <option value="1"
                                    {{ old('is_active', $carouselImage->is_active) == 1 ? 'selected' : '' }}>
                                    ACTIVE</option>
                                <option value="0"
                                    {{ old('is_active', $carouselImage->is_active) == 0 ? 'selected' : '' }}>
                                    INACTIVE</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('carousel-images.index') }}"
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
