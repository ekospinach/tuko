@layout('themes::main')

@section('title')
Selamat Datang
@endsection

@section('content')

    @if ($posts)
        @foreach ($posts as $post)
        <article class="article">
            <h1 class="article-title">{{ HTML::link($post->id.'-'.$post->slug,$post->title) }}</h1>
            <div class="article-meta">
                <span><i class="icon-calendar"></i> {{ date('d F Y', strtotime($post->updated_at)) }}</span> &middot;
                <span>{{ $post->user->nicename }}</span>
            </div>
            <div class="article-content">
                {{ HTML::truncate(HTML::markdown($post->content), 800) }}
            </div>
            <div class="article-readmore article-content">
                <p>{{ HTML::link($post->id.'-'.$post->slug, 'Baca selengkapnya') }}</p>
            </div>
        </article>
        @endforeach
    @else
        No post
    @endif

@endsection