@layout('themes::admin.main')

@section('title')
Insert New Post
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
            <h1><i class="icon-pin icon-big"></i> Insert New Post</h1>
        </div>

        <div class="row">
            <div id="content-editor" class="span10">
                {{ Form::open() }}
                    <input type="text" name="title" placeholder="Enter title Hire" class="input-block-level">
                    <textarea id="content" name="content" style="height: 300px;"></textarea>
                {{ Form::close() }}
            </div>

            <div id="content-actions" class="span3 hide">
                Every site has different requirements. When purchasing Blocks, you choose which features you need, so you don't have to pay for the ones you don't.
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
            $('#content').redactor({ autoresize: true });

            var btn             = $('#btn-content'),
                contentEditor   = $('#content-editor'),
                contentAction   = $('#content-actions');

            btn.click(function(){
                if (contentAction.hasClass('hide')) {
                    contentEditor.removeClass().addClass('span7');
                    contentAction.removeClass('hide');
                } else {
                    contentEditor.removeClass().addClass('span10');
                    contentAction.addClass('hide');
                }

                return false;
            });
        });
    </script>
@endsection