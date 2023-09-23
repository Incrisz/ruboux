@extends('layouts.app')
@include('layouts.nav')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
     
     <div class="col-lg-12 col-md-12">
         <div class="card widget">
             <div class="card-header">
                 <h5 class="card-title">Activity Overview</h5>
             </div>
             <div class="row g-4">
                 <div class="col-md-6">
                     <div class="card border-0">
                         <div class="card-body text-center">
                             <div class="display-5">
                                 <i class="bi bi-receipt text-warning"></i>
                             </div>
                             <h5 class="my-3">Products</h5>
                             <div class="text-muted">{{$productcount}} total products</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="card border-0">
                         <div class="card-body text-center">
                             <div class="display-5">
                                 <i class="bi bi-bar-chart text-info"></i>
                             </div>
                             <h5 class="my-3">Banners</h5>
                             <div class="text-muted">{{$bannercount}} total banners</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-lg-12 col-md-12">
       <div class="card">
             <div class="card-header">{{ __('Dashboard') }}</div>

             <div class="card-body">
                 @if (session('status'))
                     <div class="alert alert-success" role="alert">
                         {{ session('status') }}
                     </div>
                 @endif

                 {{ __('Welcome, You are logged in!') }}
             </div>
         </div>
     </div>
</div>
@include('layouts.footer')
@endsection