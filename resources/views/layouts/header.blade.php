<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="{{asset('assets/CSS/style.css')}}"rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg theme-navbar">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo/mehedi.png')}}" class="card-img-top" style="width: 70px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div><form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-light" type="submit">Search</button>
    </form></div>
    
  <div>
    
    <a href=""class="text-decoration-none Text-light">Become a seller</a>
      <a href=""class="btn btn-success btn_sm">Cart</a>
      <a href=""class="btn btn-light">Login</a></div>
</nav>


<nav class="navbar navbar-expand-lg bg-body-tertiary theme-navbar-light">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="nav text-dark">
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="{{url('category/electronics')}}">T-shirt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="#">Panjabi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="#">mens item</a>
        </li><li class="nav-item">
          <a class="nav-link active text-dark"  href="#">Female item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="#">Classic fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark"  href="{{url('category/electronics/tv')}}">Western fashion</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>