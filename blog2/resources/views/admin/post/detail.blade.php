@extends('head')

@section('title', $data['name'])

@section('main')

    <section class="page-top-section set-bg" data-setbg="{{asset('img/page-top-bg.jpg')}}">
        <div class="container">
            <h2>post</h2>
        </div>
    </section>


    <section class="post-show-section">
        <div class="container">
            <div class="row">
                <div class ="col-lg-12">
                    <h1>{!! $data['name'] !!}</h1>
                    <hr>
                    <p>{!! $data['content'] !!}</p>
                </div>
            </div>
        </div>

    </section>

@endsection