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
                <a href="{{url('/home')}}">
                    <i class="bi bi-globe2 small me-2"></i> Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-custom table-lg mb-0" id="products">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th class="text-end">Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                $i=1
                @endphp
                @foreach($products as $product)
                <tr>
                    <td>{{$i++}}</td>
                    <td><img src="{{asset('dist/img/products/'.$product->image)}}" class="rounded" width="40" alt="Product Image"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown"
                                    class="btn btn-floating"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                <form action="{{route('product.destroy',$product->id )}}" method="POST" onsubmit="return confirm('Are you sure to delete this product?');">
                                @csrf 
                                @method('delete')
                                    <a href="{{route('product.edit',$product->id )}}" class="dropdown-item">Edit</a>
                                    <button type="submit" class="dropdown-item" >Delete</button>
                                </form> 
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- <nav class="mt-4" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav> -->
    </div>
</div>
@include('layouts.footer')
@endsection