@extends('head')

@section('title', 'register')

@section('main')

    @if (count($errors) > 0)
        <div class="col-sm-12" style="margin-top: 15px">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

@include('flash::message')

<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">
                    <h4>Register</h4>
                    <form action="{{route('dangky')}}" class="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="user account" name="name">
                            </div>
                            <div class="col-md-12">
                                <input type="password" placeholder="user password" name="password">
                            </div>
                            <div class="col-md-12">
                                <input type="password" placeholder="user password" name="password_confirmation">
                            </div>
                            <div class="col-md-12">
                                <input type="email" placeholder="user email" name="email">
                            </div>
                            <div class="col-md-12">
                                <button class="site-btn" type="submit">Register</button>
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