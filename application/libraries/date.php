<?php
/**
 * Woorkjob
 *
 * @package     Woorkjob
 * @subpackage  Date Libraries
 * @author      Woorkjob Dev Team
 * @copyright   Copyright (c) 2012, Woorkjob, Inc.
 * @license     http://woorkjob.com/license.html
 * @link        http://woorkjob.com
 * @since       Version 0.0.1
 * @filesource
 */
class Date {

    /**
     * Range day
     *
     * @param string $tipe
     * @return array
     */
    public static function range($tipe = 'day')
    {
        $arr = array(''=>'');

        if ($tipe === 'day') {
            for ($x = 1; $x <= 31; $x++) {
                $arr[$x] = $x;
            }
        } elseif ($tipe === 'year') {
            for ($x = date('Y'); $x <= date('Y') + 2; $x++) {
                $arr[$x] = $x;
            }
        }

        return $arr;
    }
}