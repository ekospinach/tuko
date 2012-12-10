<?php

class Content_Admin_Categories_Controller extends Base_Controller {

    private $module = 'content::admin.categories.';
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
     * Get index categories page
     *
     * @return mixed
     */
    public function get_index()
    {
        $this->data['categories'] = Term::getCategory();
        return view($this->module.'index', $this->data);
    }

    public function get_search()
    {
        return "Search";
    }

    /**
     * Insert categories
     *
     * @return mixed
     */
    public function post_insert()
    {
        $rules = array(
            'name' => 'required|unique:terms'
        );

        if (Input::get('slug')) {
            $rules['slug'] = 'required|unique:terms';
        }

        $val = Validator::make(Input::all(), $rules);

        if ($val->fails()) {
            return Redirect::to('admin/categories')
                    ->with('error', $val->errors->all());
        } else {

            $term = new Term;
            $term->name = Input::get('name');
            $term->slug = Str::slug(Input::get('slug') ? : Input::get('name'));
            $term->parent = Input::get('parent');
            $term->type = 'category';
            $term->description = Input::get('description');

            if ($term->save()) {
                return Redirect::to('admin/categories');
            } else {
                return Redirect::to('admin/categories')
                        ->with('error','Unable save, please try again');
            }

        }
    }

    /**
     * Get category data
     *
     * @param  int $id
     * @return mixed
     */
    public function get_get($id)
    {
        $term = Term::where('id','=',$id)->where('type','=','category')->first();

        if ($term) {
            $this->data['category'] = $term;
            return view($this->module.'update', $this->data);
        } else {
            return Redirect::to('admin/categories');
        }

    }

    /**
     * Update category data
     *
     * @param  int $id
     * @return mixed
     */
    public function post_update($id)
    {
         $rules = array(
            'name' => 'required|unique:terms'
        );

        if (Input::get('slug')) {
            $rules['slug'] = 'required|unique:terms';
        }

        $val = Validator::make(Input::all(), $rules);

        if ($val->fails()) {
            return Redirect::to('admin/categories/'.$id)
                    ->with('error', $val->errors->all());
        } else {

            $term = Term::where('id','=',$id)->where('type','=','category')->first();

            if ($term) {
                $term->name = Input::get('name');
                $term->slug = Str::slug(Input::get('slug') ? : Input::get('name'));
                $term->parent = Input::get('parent');
                $term->type = 'category';
                $term->description = Input::get('description');

                if ($term->save()) {
                    return Redirect::to('admin/categories');
                } else {
                    return Redirect::to('admin/categories')
                            ->with('error','Unable update, please try again');
                }
            } else {
                return Redirect::to('admin/categories');
            }

        }
    }

    public function post_delete()
    {
        return "Hello post delete";
    }
}