@extends('head')

@section('tittle','login')

@section('main')

@include('flash::message')

<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">
                    <h4>SignIn</h4>
                    <form action="{{route('dangnhap')}}" class="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="user account" name="user">
                            </div>
                            <div class="col-md-12">
                                <input type="password" placeholder="user password" name="password">
                            </div>
                            <div class="col-md-12">
                                <button class="site-btn" type="submit">Login</button>
                            </div>
                        </div>
                        {{ csrf_field ()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection