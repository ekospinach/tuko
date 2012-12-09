<?php

class Content_Admin_Categories_Controller extends Base_Controller {

    private $module = 'content::admin.categories.';

    public function action_index()
    {
        return view($this->module.'index');
    }
}