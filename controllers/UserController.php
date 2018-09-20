<?php
namespace controllers;

class UserController{
    public function User()
    {
        $model = new \models\User;
        $user = $model->hollow();
        view('users.user',[
            'name'=>$user
        ]);
    }

   
}