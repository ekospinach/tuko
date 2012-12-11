@layout('themes::admin.main')

@section('title')
{{ __($module.'title.index') }}
@endsection

@section('content')
<div class="row">
    <div class="span2">
        @include('themes::admin.sidebar')
    </div>
    <div class="span10">
        <div class="pagehead">
            <h1>{{ __($module.'title.index') }}</h1>
        </div>
        <div class="pull-right">
            {{ HTML::link('/admin/post/insert','<i class="icon-feather"></i> '. __($module.'btn.insert'), array('class'=>'btn btn-primary')) }}
        </div>
        @include('content::admin.navtabs')
    </div>
</div>
@endsection