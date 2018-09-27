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

<div class="col-md-12">
    @include('flash::message')
</div>