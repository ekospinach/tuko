<?php

class Content_Admin_Post_Controller extends Base_Controller {

    private $module = 'content::admin.post.';

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
        $this->data['categories'] = Term::where('type','=','category')->get();
        return view($this->module.'insert', $this->data);
    }
}