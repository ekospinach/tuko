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
                    <li class="active"><a href="#write" data-toggle="tab">Write</a></li>
                    <li><a href="#preview" data-toggle="tab">Preview</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active bubble-content" id="write">
                        <div id="content-editor">
                            {{ Form::open() }}
                                {{ Form::token() }}
                                <input type="text" name="title" placeholder="Enter title Hire" class="input-block-level">
                                <textarea class="redactor" name="content" style="height: 200px;"></textarea>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="tab-pane fade bubble-content" id="preview">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                    </div>
                    <div class="tab-pane fade bubble-content" id="settings">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                </div>
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