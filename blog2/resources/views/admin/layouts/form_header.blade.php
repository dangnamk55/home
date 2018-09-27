
    <!-- form start -->
        @if(empty($model))
            {{ Form::open(['url' => $action, 'id' => !empty($formId) ? $formId : 'edit-form', 'files' => !empty($hasFile)]) }}
        @else
            {{ Form::model($model, ['url' => $action, 'id' => !empty($formId) ? $formId : 'edit-form', 'files' => !empty($hasFile)]) }}
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">@include('admin.layouts.form_error')
            </div>
        </div>
