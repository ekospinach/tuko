@layout('themes::admin.main')

@section('title')
{{ __($module.'title.update') }}
@endsection

@section('css')
    @parent
    <style type="text/css">
        .help-block { font-size: 11.5px; line-height: 16px;}
    </style>
@endsection

@section('content')
<div class="row">
    <div class="span2">
        @include('themes::admin.sidebar')
    </div>
    <div class="span10">
        <div class="pagehead">
            <h1>{{ __($module.'title.update') }}</h1>
        </div>
        @include('content::admin.navtabs')
        @include($module.'_update')
    </div>
</div>
@endsection