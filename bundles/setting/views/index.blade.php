@layout('themes::admin.main')

@section('title')
{{ __($module.'setting.title') }}
@endsection

@section('content')
<div class="row">
    <div class="span2">
        @include('themes::admin.sidebar')
    </div>
    <div class="span10">
        <div class="pagehead">
            <h1>{{ __($module.'setting.title') }}</h1>
        </div>

        @include('setting::_navtabs')
    </div>
</div>

@endsection