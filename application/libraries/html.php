<?php

class HTML extends \Laravel\HTML {

    /**
     * Generate a HTML link.
     *
     * <code>
     *      // Generate a link to a location within the application
     *      echo HTML::link('user/profile', 'User Profile');
     *
     *      // Generate a link to a location outside of the application
     *      echo HTML::link('http://google.com', 'Google');
     * </code>
     *
     * @param  string  $url
     * @param  string  $title
     * @param  array   $attributes
     * @param  bool    $https
     * @return string
     */
    public static function link($url, $title = null, $attributes = array(), $https = null)
    {
        $url = URL::to($url, $https);

        if (is_null($title)) $title = $url;

        return '<a href="'.$url.'"'.static::attributes($attributes).'>'.$title.'</a>';
    }
}