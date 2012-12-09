@layout('themes::admin.main')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row-fluid">
    <div class="span2">
        @include('themes::admin.sidebar')
    </div>
    <div class="span7">
        sss
    </div>
    <div class="span3">
        Ss
    </div>
</div>
@endsection