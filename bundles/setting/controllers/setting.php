<?php

class Setting_Setting_Controller extends Base_Controller {

    public $module  =  'setting::';
    public $restful = true;

    public function __construct()
    {
        parent::__construct();
        $this->data['module'] = $this->module;
        $this->data['sidebar'] = 'setting';
    }

    public function get_index()
    {
        return view($this->module.'index', $this->data);
    }
}