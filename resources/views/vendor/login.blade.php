@extends('vendor.layouts.main')
@push('title')
<title>Vendor Login</title>
@endpush

@section('content')
<section>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                        <img src="{{asset('dashboard/assets/img/vendor.jpg')}}" class="rounded-3 img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 p-5">
                        <div>
                            <form action="{{ url('vendor/login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    

                                    <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Phone Number</label>
                                        <input value="{{old('phone')}}" type="tel" name="phone" class="form-control" placeholder="+880 ">
                                    </div>
                                    @error("phone")
                                        <div class="texy-danger">{{$message}}</div>

                                    @enderror

                                   

                                    <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="******">
                                    </div>
                                    @error("password")
                                        <div class="texy-danger">{{$message}}</div>

                                    @enderror

                                   
                                </div>
                               
                                <button href="#" type="submit" class="btn btn-primary text-light form-control form-control-lg">Login</button>
                                <div class="text-center p-2">Don't have an account? <a href="{{url('vendor/signup')}}" class="text-decoration-none">Signup</a></div>

                                <div class="text-center p-1"><a href="{{url('vendor/forget')}}" class="text-decoration-none">Forgotten password?</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection