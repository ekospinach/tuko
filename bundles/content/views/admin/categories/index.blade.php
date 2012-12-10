@layout('themes::admin.main')

@section('title')
Content Management
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
            <h1>Content Management</h1>
        </div>

        @include('content::admin.navtabs')

        <div class="row">
            <div class="span3">
                <h4>Tambah Kategori Baru</h4>
                @include($module.'_insert')
            </div>
            <div class="span7">
                @include($module.'_table')
            </div>
        </div>
    </div>
</div>
@endsection