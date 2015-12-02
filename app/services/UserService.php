<?php

class UserService {
    public static function checkUserByUsername() {
        $username = DB::table('users')->select('email')->where('email', Input::get('email'))->get();
        //User::where('username', Input::get('username'))->select('name')->get();
        if($username) {
            //username exists
            return 1;
        }
        //username doesn't exist
        return 0;
    }

    public static function createNewUser() {
        $user = new User();
        $pass = Input::get('password');
        $user->email = Input::get('email');
        $user->phone = Input::get('phone');
        $user->admin = 0;
        $user->password = Hash::make($pass);
        $user->name = Input::get('name');
        $user->userType = Input::get('userType');
        $user->save();
        return $user;
    }

    public static function updateUser(User $user) {
        $user->email = Input::get('email');
        $user->name = Input::get('name');
        $user->save();
        return $user;
    }

    public static function logout() {
        $temp = Auth::logout();
        return $temp;
    }
//    public static function UserPromos() {
//        $user = Auth::user()->username;
//        $data = Promo::where('username',$user)->get();
//        
//        return $data;
//    }
}
