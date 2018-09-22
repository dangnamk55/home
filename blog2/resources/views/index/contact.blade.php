@extends('head')

@section('tittle','contact')

@section('main')

<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
    <div class="container">
        <h2>Contact</h2>
    </div>
</section>

@include('flash::message')

<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">
                    <h4>Send me an email!</h4>

                    {!! Form::open(array('route' => 'feedback', 'class' => 'contact-form')) !!}
                    <div>
                        <label  class="email">Your name</label>
                        {!! Form::text('name', null, ['class' => 'input-text', 'placeholder'=>"Your name"]) !!}
                    </div><div>
                        <label  class="email">Your email</label>
                        {!! Form::text('email', null, ['class' => 'input-text', 'placeholder'=>"Your email"]) !!}
                    </div><div>
                        <label class="email">Comments</label>
                        {!! Form::textarea('comment', null, ['class' => 'tarea', 'rows'=>"5"]) !!}
                    </div><div class="send">
                        {!! Form::submit('Send', ['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@endsection