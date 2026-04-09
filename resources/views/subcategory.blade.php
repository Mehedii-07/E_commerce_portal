@extends('layouts.main')

@push('title')
<title>Category</title>
@endpush

@section('content')

<div class="container-fluid bf-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Sub Category</h1>
</div>
<section class="my-5">
    <div class="container">
        
        
        
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card " >
                <a href="#"><img src="{{asset('assets/images/products/p1.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none"> Tote Bag</a></h6>
                    <h5 class="card-title text-center">₹ 499.00</h5>                   
                </div>  
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/p1.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Shoulder Bag</a></h6>
                    <h5 class="card-title text-center">₹ 499.00</h5>
                    
                </div>  
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/p1.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Hobo Bag</a></h6>
                    <h5 class="card-title text-center">₹ 499.00</h5>
                    
                </div>  
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/p1.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Backpack</a></h6>
                    <h5 class="card-title text-center">₹ 499.00</h5>
                    
                </div>  
                </div>
            </div>



            
        </div>
    </div>
</section>
@endsection