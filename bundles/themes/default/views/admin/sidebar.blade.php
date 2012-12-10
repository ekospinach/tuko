<?php

$content_sidebar = [
    'dashboard' => ['icon-dashboard','Dashboard'],
    'content'   => ['icon-documents','Content'],
    'asset'     => ['icon-images','Asset'],
    'user'      => ['icon-users','User'],
    'setting'   => ['icon-cog-2','Setting']
];

?>
<ul class="nav nav-sidebar">
@foreach ($content_sidebar as $key => $value)
    @if ($sidebar == $key)
        <li class="active">{{ HTML::link('admin/'.$key, '<i class="'.$value['0'].'"></i> '.$value['1']) }}</li>
    @else
        <li>{{ HTML::link('admin/'.$key, '<i class="'.$value['0'].'"></i> '.$value['1']) }}</li>
    @endif
@endforeach
</ul>

<?php unset($content_sidebar);?>