@layout('themes::main')

@section('title')
{{ $post->title }}
@endsection

@section('content')

    @if ($post)
        <article class="article">
            <h1 class="article-title">{{ $post->title }}</h1>
            <div class="article-meta">
                <span><i class="icon-calendar"></i> {{ date('d F Y', strtotime($post->updated_at)) }}</span> &middot;
                <span>{{ $post->user->nicename }}</span>
            </div>
            <div class="article-content">
                {{ HTML::markdown($post->content) }}
            </div>
        </article>
    @else
        No post
    @endif

@endsection