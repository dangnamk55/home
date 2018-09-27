@extends('head')

@section('tittle', 'add post')

@section('main')

@section('script')
    <script type="text/javascript">
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection


    <section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">

                    @php
                        $isEdit = (explode('.',getCurrentRoute())[1] == 'getEdit');
                        $formAction = $isEdit ? route('admin.editSubmit', ['id' => $item->id]) : route('addPost');
                    @endphp

                    @include('admin.layouts.form_header', ['action' => $formAction, 'model' => $item ?? null])
                    <div>
                        <label  for="name">Your post name</label>
                        {!! Form::text('name', null, ['class' => 'input-text', 'placeholder'=>"Your post name"]) !!}
                    </div>
                    <div>
                        @if(!empty($item))
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{$item->name}}"
                                 class="img img-responsive">
                        @endif
                        <label for="image" class="hidden">hình đại diện</label>
                        {!! Form::file('image', ['accept' => 'image/*']) !!}
                    </div>
                    <div>
                        <label  for="description">tóm tắt</label>
                        {!! Form::textarea('description', null, ['class' => 'tarea', 'placeholder'=>"description", 'rows'=>'3']) !!}
                    </div>

                    <div>
                        <label for="editor1">Content</label>
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