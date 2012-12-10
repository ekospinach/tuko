<?php

class Content_Admin_Categories_Controller extends Base_Controller {

    private $module = 'content::admin.categories.';

    public function __construct()
    {
        parent::__construct();
        $this->data['sidebar']  = 'content';
        $this->data['module']   = $this->module;
    }

    public function action_index()
    {
        return view($this->module.'index', $this->data);
    }
}