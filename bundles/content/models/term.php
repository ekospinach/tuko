<?php

class Term extends Eloquent {

    public static $table = 'terms';

    /**
     * Get Category
     *
     * @return object
     */
    public static function getCategory()
    {
        return Term::where('type','=','category')->get();
    }

    /**
     * Get Dropdown Category
     *
     * @return array
     */
    public static function opsCategory()
    {
        $data = static::getCategory();
        $arr  = array('0' => 'None');

        foreach ($data as $key) {
            $arr[$key->id] = $key->name;
        }

        return $arr;
    }
}