<?php

class Content_Admin_Tags_Controller extends Base_Controller {

    private $module = 'content::admin.tags.';

    public function action_index()
    {
        return view($this->module.'index');
    }
}