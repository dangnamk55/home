@extends('head')

@section('tittle', 'add post')

@section('main')

@section('script')
    <script type="text/javascript">
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">
                    <h4>Add new post</h4>
                    {!! Form::open(array('route' => 'addPost', 'class' => 'contact-form', 'method' => 'put')) !!}
                    <div>
                        <label  for="name">Your post name</label>
                        {!! Form::text('name', null, ['class' => 'input-text', 'placeholder'=>"Your post name"]) !!}
                    </div>
                    <div>
                        <label for="image">hình đại diện</label>
                        {!! Form::file('image', ['accept' => 'image/*']) !!}
                    </div>
                    <div>
                        <label  for="alias">tóm tắt</label>
                        {!! Form::textarea('alias', null, ['class' => 'tarea', 'placeholder'=>"text something", 'rows'=>'3']) !!}
                    </div>

                    <div>
                        <label for="content">Content</label>
                        {!! Form::textarea('content', null, ['class' => 'tarea ckeditor', 'rows'=>'5', 'id'=>'editor1']) !!}

                    </div>
                    <div class="send">
                        {!! Form::submit('Send', ['class' => 'btn btn-success']) !!}
                    </div>
                    {{ csrf_field ()}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </section>



@endsection