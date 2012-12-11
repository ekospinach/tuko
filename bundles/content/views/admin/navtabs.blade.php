<?php

$navtabs = [
    'post'          => ['icon-newspaper', __('content::admin.nav.post')],
    'categories'    => ['icon-archive',__('content::admin.nav.category')],
    'tags'          => ['icon-tag-fill',__('content::admin.nav.tag')]
];

?>

<ul class="nav nav-tabs">
@foreach($navtabs as $key => $value)
    @if (URI::segment(2) == 'content')
        @if ($key == 'post')
            <li class="active">
                {{ HTML::link('admin/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @else
            <li>
                {{ HTML::link('admin/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @endif
    @else
        @if (URI::segment(2) == $key)
            <li class="active">
                {{ HTML::link('admin/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @else
            <li>
                {{ HTML::link('admin/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @endif
    @endif
@endforeach
</ul>

<?php unset($navtabs);?>