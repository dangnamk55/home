@extends('head')

@section('tittle','post')

@section('main')

    <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
        <div class="container">
            <h2>post</h2>
        </div>
    </section>

@foreach($data as $item)
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-text">
                    <h2>{!! $item["name"] !!}</h2>
                    <p>{{$item['description']}}</p>
                    <div {{route('postshow',['id'=>$item['id']])}} class="site-btn">Read more</div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('storage/'.$item['image'])}}">
                </div>
            </div>
        </div>
    </section>


@endforeach
    <section class="pagination-section">
        <div class="container">
            <div class="row">
                <div class="pagination pull-left">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">previous</a>
                        </li>
                        @for ($i = 1; $i <= $data->lastpage() ; $i++ )
                            <li class="page-item {!! ($data->currentpage() == $i) ? 'active' : '' !!}">
                                <a class="page-link" href="{!! $data->url($i) !!}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item ">
                            <a class="page-link" href="#">next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection