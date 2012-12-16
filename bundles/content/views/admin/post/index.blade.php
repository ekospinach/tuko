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

        @if ($posts)
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __($module.'field.title.label') }}</th>
                        <th>{{ __($module.'field.users_id.label') }}</th>
                        <th>Categories</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ HTML::link('/admin/post/'.$post->id, $post->title) }}</td>
                        <td>{{ $post->user->nicename }}</td>
                        <td>
                            @foreach($post->termpost as $termpost)
                                {{ $termpost->term->name }},
                            @endforeach
                        </td>
                        <td>{{ $post->created_at != '0000-00-00 00:00:00' ? date('Y/m/d', strtotime($post->created_at)) : '-' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert">Anda belum memiliki post untuk saat ini </div>
        @endif
    </div>
</div>
@endsection