@extends('layouts.main')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner w-100">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/p111.jpg')}}" class="d-block w-100" alt="Slider 1">
    </div>
    <div class="carousel-item">
        <img src="{{asset('assets/images/img2.jfif')}}" class="d-block w-100" alt="Slider 2">
    </div>
    <div class="carousel-item">
        <img src="{{asset('assets/images/img3.jfif')}}" class="d-block w-100" alt="Slider 3">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="p-2 flex-grow-1"><h2 class="mb-3">Top Deals</h2></div>
            <div class="p-2 "><a href="#" class="btn theme-green-btn text-light">View All</a></div>
            <div><a href="{{url('category/electronics')}}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
            </div>
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
<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="flex-grow-1"><h2>Best of Electronics</h2></div>
            <div><a href="{{url('category/electronics')}}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
            </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/p5.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">------</a></h6>
                    <h5 class="card-title text-center">₹ 2499.00</h5>
                    
                </div>  
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p5.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
                    <h5 class="card-title text-center">₹ 1499.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p2.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 5999.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p5.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h6>
                    <h5 class="card-title text-center">₹ 13999.00</h5>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="flex-grow-1"><h2>Popular Categories</h2></div>
            <div><a href="{{url('category/electronics')}}" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
            </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card " >
                
                <a href="#"><img src="{{asset('assets/images/products/p1.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">Hand Bag</a></h6>
                    <h5 class="card-title text-center">₹ 799.00</h5>
                    
                </div>  
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p3.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
                    <h5 class="card-title text-center">₹ 1499.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p7.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Laptop Bag</a></h6>
                    <h5 class="card-title text-center">₹ 599.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                <a href="#"><img src="{{asset('assets/images/products/p5.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h6>
                    <h5 class="card-title text-center">₹ 13999.00</h5>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        
        <div class="d-flex">
            <div class="flex-grow-1"><h2>Recently Viewed</h2></div>
            <div><a href="" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>
            
            </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card " >
                
                 <a href="#"><img src="{{asset('assets/images/products/p5.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center "><a href="#" class="text-dark text-decoration-none">jacket</a></h6>
                    <h5 class="card-title text-center">₹ 2499.00</h5>
                    
                </div>  
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" >
                
                 <a href="#"><img src="{{asset('assets/images/products/p6.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">T-shirt</a></h6>
                    <h5 class="card-title text-center">₹ 1099.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                 <a href="#"><img src="{{asset('assets/images/products/p7.jfif')}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">T-shirt</a></h6>
                    <h5 class="card-title text-center">₹ 5999.00</h5>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                
                 <a href="#"><img src="{{asset('assets/images/products/p8.jfif')}}" class="card-img-top" alt="..."></a>
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">T-shirt</a></h6>
                    <h5 class="card-title text-center">₹ 13999.00</h5>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

