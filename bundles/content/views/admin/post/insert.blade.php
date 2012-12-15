@layout('themes::admin.main')

@section('title')
{{ __($module.'title.insert') }}
@endsection

@section('css')
    @parent
    {{ HTML::style('js/redactor/css/redactor.css') }}
    <style type="text/css">
        #content-editor input[type="text"]{
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .bubble-container {
            padding: 3px;
            background: none repeat scroll 0% 0% rgb(238, 238, 238);
            border-radius: 3px 3px 3px 3px;
        }
        .bubble-inner {
            min-height: 60px;
            padding-top: 10px;
            border: 1px solid rgb(202, 202, 202);
            background-color: rgb(255, 255, 255);
        }
        .bubble-content {
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
        }
        .bubble-content h4.title {
            font-size: 14px;
            padding-bottom: 5px;
            border-bottom: 1px solid rgb(202, 202, 202);
        }

        .bubble-content .form-actions {
            margin-right: -10px;
            margin-left: -10px;
            margin-bottom: -10px;
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
                    <li>&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#write" data-toggle="tab">Write</a></li>
                    <li><a href="#preview" data-toggle="tab">Preview</a></li>
                    <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>

                @include ($module.'_insert')

            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
    @parent
    {{ HTML::script('js/redactor/redactor.min.js') }}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.redactor').redactor({ autoresize: true });
        });
    </script>
@endsection