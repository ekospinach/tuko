<?php

Autoloader::directories(array(
    Bundle::path('content').'models',
));

Event::listen('tukocms.posting.update', function($post, $terms)
{
    $term = Termpost::where('post_id','=',$post);
    if ($term) {
        $term->delete();
    }

    if (count($terms) > 0) {
        foreach ($terms as $term) {
            DB::table('terms_post')->insert(array(
                'terms_id'  => $term,
                'post_id'   => $post
            ));
        }
    }
});