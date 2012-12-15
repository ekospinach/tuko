<?php

class Content_Admin_Post_Controller extends Base_Controller {

    private $module = 'content::admin.post.';
    public $restful = true;

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->data['sidebar']  = 'content';
        $this->data['module']   = $this->module;
    }

    /**
     * Get berita index
     *
     * @return mixed
     */
    public function get_index()
    {
        $this->data['posts'] = Post::with('user')->get();
        return view($this->module.'index', $this->data);
    }

    /**
     * Get form insert berita
     *
     * @return mixed
     */
    public function get_insert()
    {
        $this->data['categories'] = Term::where('type','=','category')->get();
        return view($this->module.'insert', $this->data);
    }

    /**
     * Handle form berita insert
     *
     * @return json
     */
    public function post_insert()
    {
        $chk = Validator::make(Input::all(), Post::$rules);

        if ($chk->fails()) {
            return Response::SysError(array(
                'html'  => 'Mohon lengkapi data semua',
                'error' => $chk->errors->all()
            ));
        } else {
            $post = new Post;
            $post->title    = Input::get('title');
            $post->content  = Input::get('content');
            $post->status   = Input::get('status');
            $post->comment  = Input::get('comment');
            $post->user_id  = Auth::user()->id;
            $post->slug     = Str::slug(Input::get('title'));

            if (Input::get('status') == 'publish') {
                $post->created_at  = Input::get('year').'-'.Input::get('month').'-'.Input::get('day').' '.Input::get('hour').':'.Input::get('min').':00';
            }

            if ($post->save()) {
                return Response::SysOk(array(
                    'html'  => 'Simpan data berhasil :)'
                ));
            } else {
                return Response::SysError(array(
                    'html'  => 'Server error'
                ));
            }
        }
    }

    /**
     * Get form update berita
     *
     * @return mixed
     */
    public function get_update($id)
    {
        $this->data['post']         = Post::find($id);
        $this->data['categories']   = Term::where('type','=','category')->get();
        return view($this->module.'update', $this->data);
    }

    /**
     * Handle form berita update
     *
     * @return json
     */
    public function post_update($id)
    {
        $chk = Validator::make(Input::all(), Post::$rules);

        if ($chk->fails()) {
            return Response::SysError(array(
                'html'  => 'Mohon lengkapi data semua',
                'error' => $chk->errors->all()
            ));
        } else {
            $post = Post::find($id);

            if ($post) {
                $post->title    = Input::get('title');
                $post->content  = Input::get('content');
                $post->status   = Input::get('status');
                $post->comment  = Input::get('comment');
                $post->user_id  = Auth::user()->id;
                $post->slug     = Str::slug(Input::get('title'));
                $post->updated_at = date('Y-m-d H:i:s');

                if (Input::get('status') == 'publish') {
                    $post->created_at  = Input::get('year').'-'.Input::get('month').'-'.Input::get('day').' '.Input::get('hour').':'.Input::get('min').':00';
                }

                if ($post->save()) {
                    return Response::SysOk(array(
                        'html'  => 'Simpan data berhasil :)'
                    ));
                } else {
                    return Response::SysError(array(
                        'html'  => 'Server error'
                    ));
                }
            } else {
                return Response::SysError(array(
                    'html'  => 'Spry this record is not found'
                ));
            }
        }
    }
}