@extends('layouts.main')

@push('title')
<title>Category</title>
@endpush

@section('content')

<div class="container-fluid bf-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Category</h1>
</div>
<section class="my-5">
    <div class="container">
        
        
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/p1.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Bags</a></h6>
                    <h5 class="card-title text-center">₹ 499.00</h5>
                    
                </div>  
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p2.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Shoes</a></h6>
                    <h5 class="card-title text-center">₹ 1499.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p3.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Pents</a></h6>
                    <h5 class="card-title text-center">₹ 799.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p4.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Bags</a></h6>
                    <h5 class="card-title text-center">₹ 1399.00</h5>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection