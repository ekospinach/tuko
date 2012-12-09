<?php

class Content_Admin_Blog_Controller extends Base_Controller {

    private $module = 'content::admin.blog.';

    public function action_index()
    {
        return view($this->module.'index');
    }

    public function action_insert()
    {
        return view($this->module.'insert');
    }
}