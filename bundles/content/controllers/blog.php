<?php

class Content_Blog_Controller extends Base_Controller {

    public $module  = 'content::blog.';
    public $restful = true;

    public function get_index()
    {
        $this->data['posts'] = Post::with(array('user','termpost','termpost.term'))
                                ->where('status','=','publish')
                                ->get();
        return view($this->module.'index', $this->data);
    }

    public function get_read($id, $slug)
    {
        $post = Post::with(array('user','termpost','termpost.term'))
            ->where('id','=',$id)
            ->where('slug','=',$slug)
            ->where('status','=','publish')
            ->first();

        if ($post) {
            $this->data['post'] = $post;
            return view($this->module.'read', $this->data);
        } else {
            return Response::error('404');
        }

    }
}