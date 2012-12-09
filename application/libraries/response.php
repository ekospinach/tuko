<?php

class Response extends \Laravel\Response {

    /**
     * Success
     *
     * @param string $title Message title
     * @param array $data
     *
     * @return json
     */
    public static function SysOk($data = null)
    {
        return json_encode(array(
            'code'  => 200,
            'title' => 'Success',
            'data'  => $data
        ));
    }

    /**
     * Duplicate
     *
     * @param string $title Message title
     * @param array $data
     *
     * @return json
     */
    public static function SysDuplicate($data = null)
    {
        return json_encode(array(
            'code'  => 302,
            'title' => 'Data is duplicate, please try some different name',
            'data'  => $data
        ));
    }

    /**
     * Missing
     *
     * @param string $title Message title
     * @param array $data
     *
     * @return json
     */
    public static function SysMissing($data = null)
    {
        return json_encode(array(
            'code'  => 302,
            'title' => 'Data is missing, please try again',
            'data'  => $data
        ));
    }

    /**
     * Error Systen
     *
     * @param string $title Message title
     * @param array $data
     *
     * @return json
     */
    public static function SysError($data = null)
    {
        return json_encode(array(
            'code'  => 500,
            'title' => 'System Error, please try again',
            'data'  => $data
        ));
    }

    /**
     * Not Found Systen
     *
     * @param string $title Message title
     * @param array $data
     *
     * @return json
     */
    public static function SysNotFound($data = null)
    {
        return json_encode(array(
            'code'  => 500,
            'title' => 'Record not found, please try different',
            'data'  => $data
        ));
    }
}
