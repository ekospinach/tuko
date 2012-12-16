<?php

class Post extends Eloquent {

    public static $table        = 'post';
    public static $timestamps   = false;
    public static $rules        = [
        'title'   => 'required|max:255',
        'content' => 'required',
        'status'  => 'required|in:draft,review,publish',
        'comment' => 'required|in:on,off',
        'month'   => 'required|numeric',
        'day'     => 'required|numeric',
        'year'    => 'required|numeric',
        'hour'    => 'required|numeric',
        'min'     => 'required|numeric'
    ];

    public function user()
    {
        return $this->belongs_to('User');
    }

    public function termpost()
    {
        return $this->has_many('Termpost');
    }
}