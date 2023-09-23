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
        <h3>Edit Product</h3>
        <section class="card card-body mb-0">
            <form action="{{route('product.update', $products->id)}}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="mb-4">
                    <h6 class="card-title mb-3">Edit Product</h6>
                    <div class="text-muted">Edit this Product</div>
                </div>
                <div class="row g-4 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$products->name}}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$products->price}}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required>{{$products->description}}</textarea>
                </div>
                <div class="mb-3">
                    <img src="{{asset('dist/img/products/'.$products->image)}}" alt="image" width="80px" height="80px" style="border-radius:20%;">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="image" value="{{$products->image}}">
                </div>
                <div class="mb-3">
                <img src="{{asset('dist/img/products/sample/'.$products->sample_image)}}" alt="Sample_Image" width="80px" height="80px" style="border-radius:20%;">
                    <label for="formFile" class="form-label">Sample_Image</label>
                    <input class="form-control" type="file" id="formFile" name="sample_image" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </section>
    </div>
</div>
@include('layouts.footer')
@endsection