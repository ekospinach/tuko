<?php

class Termpost extends Eloquent {

    public static $table        = 'terms_post';
    public static $timestamps   = false;

    public function term()
    {
        return $this->belongs_to('Term', 'terms_id');
    }
}