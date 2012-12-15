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
            padding-top: 20px;
            border: 1px solid rgb(202, 202, 202);
            background-color: rgb(255, 255, 255);
        }
        .bubble-content {
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 40px;
        }
        .bubble-content h4.title {
            font-size: 14px;
            padding-bottom: 5px;
            border-bottom: 1px solid rgb(202, 202, 202);
        }

        .bubble-content .form-actions {
            margin-right: -40px;
            margin-left: -40px;
            margin-bottom: -40px;
        }
        .content-preview {
            padding-top: 25px;
        }
        .content-preview h1,
        .content-preview h2,
        .content-preview h3,
        .content-preview h4,
        .content-preview h5 {
            font-weight: normal;
        }
        .post-title {
            font-size: 30px;
            line-height:26px;
            margin-bottom: 20px;
        }
        .post-body, .post-body p,
        .post-body li {
            font-size: 14px;
            line-height:20px;
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

            $('#tab-preview').on('click', function(){
                contentTitle = $('#title').val();
                contentBody  = $('#content').val();

                if (contentTitle == '' || contentBody == '') {
                    alert ('Please add your title or body');
                    return false;
                } else {
                    $('.content-preview').html('<div class="post-title">'+contentTitle+'</div>' + '<div class="post-body">' + contentBody + '</div>');
                }
            });
        });
    </script>
@endsection