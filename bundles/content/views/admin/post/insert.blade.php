@layout('themes::admin.main')

@section('title')
{{ __($module.'title.insert') }}
@endsection

@section('content')
    @parent
    <style type="text/css">
        .upload-enabled textarea {
            border-bottom: 1px dashed rgb(221, 221, 221);
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
            background: none repeat scroll 0% 0% rgb(250, 250, 250);
            margin-bottom: 0px;
        }
        .drag-and-drop {
            margin: 0px;
            padding: 7px 10px;
            color: rgb(170, 170, 170);
            height: 16px;
            font-size: 12px;
            line-height: 16px;
            background: none repeat scroll 0% 0% rgb(250, 250, 250);
            border-right: 1px solid rgb(204, 204, 204);
            border-width: medium 1px 1px;
            border-style: none solid solid;
            border-color: -moz-use-text-color rgb(204, 204, 204) rgb(204, 204, 204);
            border-image: none;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }
        .drag-and-drop .input[type="file"] {
            position: absolute;
            width: 240px;
            margin: 0px;
            opacity: 0.0001;
            cursor: pointer;
            font-size: 12px;
        }
    </style>
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
                @include ($module.'_insert')
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
    {{ HTML::script('js/fineuploader/jquery.fineuploader-3.1.1.js') }}
    {{ HTML::script('js/carret/carret.min.js') }}
    @include($module.'_js')
@endsection