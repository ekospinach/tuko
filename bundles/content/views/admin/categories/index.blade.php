@layout('themes::admin.main')

@section('title')
Content Management
@endsection

@section('content')
<div class="row-fluid">
    <div class="span2">
        @include('themes::admin.sidebar')
    </div>
    <div class="span10">
        <div class="pagehead">
            <h1>Content Management</h1>
        </div>
        <div class="pull-right">
            {{ HTML::link('/admin/categories/insert?sidebar=content','<i class="icon-feather"></i> New Categories', array('class'=>'btn btn-primary')) }}
        </div>
        @include('content::admin.navtabs')
    </div>
</div>
@endsection