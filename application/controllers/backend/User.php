<?php

class User extends MY_controller{
    public function profile(){

        $notif = null;
        $user =\Orm\User::first();

        if($this->input->post()){            
           $username = $this->input->post('username');
           $password = $this->input->post('password');


            if($username == '' || $password == '' ){
                $notif = "Username / password tidak boleh kosong";
            }else{
                $user->username = $username;
                $user->password = $password;
                $user->save();
     
                $notif = "Username / password berhasil diganti";
            }
        }

       view('backend.User.profile', ['user' => $user, 'notif' => $notif ]);
    }
}