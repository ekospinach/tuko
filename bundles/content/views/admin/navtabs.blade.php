<?php

$navtabs = [
    'post'          => ['icon-book','Posting'],
    'categories'    => ['icon-archive','Categories'],
    'tags'          => ['icon-tag-fill','Tags']
];

?>

<ul class="nav nav-tabs">
@foreach($navtabs as $key => $value)
    @if (URI::segment(2) == 'content')
        @if ($key == 'post')
            <li class="active">{{ HTML::link('admin/'.$key.'?sidebar=content','<i class="icon '.$value['0'].'"></i> '.$value['1']) }}</li>
        @else
            <li>{{ HTML::link('admin/'.$key.'?sidebar=content','<i class="icon '.$value['0'].'"></i> '.$value['1']) }}</li>
        @endif
    @else
        @if (URI::segment(2) == $key)
            <li class="active">{{ HTML::link('admin/'.$key.'?sidebar=content','<i class="icon '.$value['0'].'"></i> '.$value['1']) }}</li>
        @else
            <li>{{ HTML::link('admin/'.$key.'?sidebar=content','<i class="icon '.$value['0'].'"></i> '.$value['1']) }}</li>
        @endif
    @endif
@endforeach
</ul>