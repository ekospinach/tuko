<?php

class User_Task {

    public function run()
    {
        echo "\nWelcome in Woorkjob CLI Task\n";
        echo "------------------------------------------------------------\n";
        echo "Available Task :\n";
        echo "   php artisan user [add|forgot]\n\n";
        echo "Example \n";
        echo "Add new admin, \n    php artisan user:admin purwandi pur@tes.com password \n";
        echo "------------------------------------------------------------\n";
    }

    /**
     * Create user admin
     *
     * @param  array $argument
     * @return string
     */
    public function admin($argument)
    {
        $name  = $argument[0];
        $email = $argument[1];
        $key   = Hash::make(md5($argument[2]));
              // Hash::make(md5(Input::get('password')));

        // starting bundle
        Bundle::start('member');

        // check user
        $chk = User::where('email','=',$email)->first();

        if ( ! $chk) {
            DB::table('users')->insert(array(
                'username' => $name,
                'display_name' => $name,
                'nicename' => 'Purwandi',
                'url'   => 'http://purwandi.me',
                'password' => $key,
                'email' => $email,
                'role' => '1', // for admin
                'activation_key' => NULL,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));

            echo "\nSuccessfully insert\n";
        } else {
            echo 'Duplicated email address :' . $email."\n";
            echo 'Try again...';
        }
    }

    public function operator()
    {

    }
}