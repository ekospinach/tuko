<?php

class Content_Admin_Blog_Controller extends Base_Controller {

    private $module = 'content::admin.blog.';

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

    public function action_insert()
    {
        return view($this->module.'insert', $this->data);
    }
}