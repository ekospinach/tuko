<?php

class Member_Session_Controller extends Base_Controller {

    public function action_login()
    {
        $this->data['layout']   = Config::get('tuko.themes');
        $this->data['title']    = 'Masuk ke Dashboard';
        return view('member::login', $this->data);
    }

    public function action_store()
    {
        // create instance validator
        $chk = Validator::make(Input::all(), array(
            'email' => 'required|email',
            'password' => 'required'
        ));

        // cek validation
        if ($chk->fails()) {
            return Redirect::to('login')->with('error', 'Email and Password required');
        } else {
            // store account cresidentials
            $account = array(
                'username' =>Input::get('email'),
                'password' => md5(Input::get('password'))
            );

            if (Auth::attempt($account)) {
                return Redirect::to('admin/dashboard');
            } else {
                return Redirect::to('login')->with('error', 'Email and Password not found');
            }
        }
    }

    public function action_logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}