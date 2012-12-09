<?php

class Dashboard_Admin_Dashboard_Controller extends Base_Controller {

    private $module = 'dashboard::admin';

    public function action_index()
    {
        return view($this->module.'.index', $this->data);
    }
}