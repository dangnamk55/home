@extends('head')

@section('title', 'add post')

@section('main')

@section('script')
    <script type="text/javascript">
        CKEDITOR.replace( 'editor1', {
            filebrowserBrowseUrl : '/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : '/responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : '/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        } );
    </script>
@endsection


    <section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">

                    @php
                        $isEdit = (explode('.', $currentRoute)[1] == 'getEdit');
                        $formAction = $isEdit ? route('admin.editSubmit', ['id' => $item->id]) : route('addPost');
                    @endphp

                    @include('admin.layouts.form_header', ['action' => $formAction, 'model' => $item ?? null, 'hasFile' => true])
                    @if($isEdit)
                        @method('PUT')
                    @endif
                    <div>
                        <label  for="name">Your post name</label><br>
                        {!! Form::text('name', null, ['class' => 'input-text', 'placeholder'=>"Your post name"]) !!}
                    </div>
                    <div>
                        @if(!empty($item))
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{$item->name}}"
                                 class="img img-responsive">
                        @endif
                        <label for="image" class="hidden">hình đại diện</label><br>
                        {!! Form::file('image', ['accept' => 'image/*']) !!}
                    </div>
                    <div>
                        <label  for="description">tóm tắt</label><br>
                        {!! Form::textarea('description', null, ['class' => 'tarea', 'placeholder'=>"description", 'rows'=>'3']) !!}
                    </div>

                    <div>
                        <label for="editor1">Content</label><br>
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