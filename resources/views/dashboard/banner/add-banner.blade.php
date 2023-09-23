@extends('layouts.app')
@include('layouts.nav')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{Session::get('success')}}
</div>
@endif  
<div class="mb-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">
                    <i class="bi bi-globe2 small me-2"></i> Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
        </ol>
    </nav>
</div>

<div class="">
    <div id="checkout-form-wizard">
        <h3>Banner</h3>
        <section class="card card-body mb-0">
            <form action="{{route('banner.store')}}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-4">
                <h6 class="card-title mb-3">Banner</h6>
                <div class="text-muted">Add some banners</div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Banner Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Banner Text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <div class="mb-3">
                <label for="formFileLg" class="form-label">Banner Image</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
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