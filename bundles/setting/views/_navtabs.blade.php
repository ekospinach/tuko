<?php

$navtabs = [
    'general'       => ['icon-cog-2', __('setting::setting.nav.general')],
    'integrations'  => ['icon-bolt',__('setting::setting.nav.integrations')],
    'comments'      => ['icon-comments-4',__('setting::setting.nav.comments')]
];

?>

<ul class="nav nav-tabs">
@foreach($navtabs as $key => $value)
    @if (URI::segment(2) == 'setting')
        @if ($key == 'general')
            <li class="active">
                {{ HTML::link('admin/setting/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @else
            <li>
                {{ HTML::link('admin/setting/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @endif
    @else
        @if (URI::segment(2) == $key)
            <li class="active">
                {{ HTML::link('admin/setting/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @else
            <li>
                {{ HTML::link('admin/setting/'.$key,'<i class="icon '.$value['0'].'"></i> '.$value['1']) }}
            </li>
        @endif
    @endif
@endforeach
</ul>

<?php unset($navtabs);?>