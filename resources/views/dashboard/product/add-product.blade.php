@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="mb-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/home')}}">
                    <i class="bi bi-globe2 small me-2"></i> Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>
</div>

<div class="">
    <div id="checkout-form-wizard">
        <h3>Add Product</h3>
        <section class="card card-body mb-0">
            <form action="{{route('product.store')}}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('post')
                <div class="mb-4">
                    <h6 class="card-title mb-3">Add Product</h6>
                    <div class="text-muted">Add some Product</div>
                </div>
                <div class="row g-4 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="image" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Sample_Image</label>
                    <input class="form-control" type="file" id="formFile" name="sample_image" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit" required>Save</button>
                </div>
            </form>
        </section>
    </div>
</div>
@include('layouts.footer')
@endsection