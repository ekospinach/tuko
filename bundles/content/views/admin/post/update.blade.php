@layout('themes::admin.main')

@section('title')
{{ __($module.'title.update') }}
@endsection

@section('content')
<div class="row">
    <div class="span2">
        @include('themes::admin.sidebar')
    </div>
    <div class="span10">
        <div class="pull-right">
            <a href="#" id="btn-content"><i class="icon icon-menu"></i> Lanjut </a>
        </div>
        <div class="pagehead">
            <h1><i class="icon-pin icon-big"></i> {{ __($module.'title.insert') }}</h1>
        </div>

        <div class="bubble-container">
            <div class="bubble-inner">
                <ul class="nav nav-tabs">
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li class="active"><a href="#write" data-toggle="tab" id="tab-write">Write</a></li>
                    <li><a href="#preview" data-toggle="tab" id="tab-preview">Preview</a></li>
                    <li><a href="#settings" data-toggle="tab" id="tab-settings">Settings</a></li>
                </ul>

                {{ Form::open(NULL,NULL,array('id'=>'form-post')) }}
                <div id="error-post"></div>
                @include ($module.'_update')
                {{ Form::close() }}
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
    @parent
    {{ HTML::script('js/jquery.form.js') }}
    {{ HTML::script('js/jquery.textarea.min.js') }}
    {{ HTML::script('js/autosize/jquery.autosize-min.js') }}
    @include($module.'_js')
@endsection