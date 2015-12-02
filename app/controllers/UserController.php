<?php

class UserController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function userSite()
    {
        $users = User::all();
        return View::make('users.userApp')->with('users', $users)->with('message',Session::get('message',false))->with('info',Session::get('info',false));
    }

    public function login() {
        return View::make('users.login')->with('error',Session::get('error',false))->with('message',Session::get('message',false))->with('info',Session::get('info',false));
    }
    public function newForm() {
        return View::make('users.register')->with('error',Session::get('error',false))->with('message',Session::get('message',false))->with('info',Session::get('info',false));
    }
    public function create() {

        if ( Input::get('password') === Input::get('passcheck')) {
            //passwords matched, verify unique username
            $email = UserService::checkUserByUsername();
            if ($email === 1) {
                Session::flash('error', 'That email: <b>'.Input::get('email').'</b> is already registered on our site, perhaps try to sign in?.');
                return Redirect::route('user.register')->with('error',Session::get('error',false));
            }
            //passwords matched, username wasn't already taken
            $user = UserService::createNewUser();
            Session::flash('message', 'User Created');
            return Redirect::route('user.register');
        }
        else if ( Input::get('userType') === 1) { //quick email capture

        }
        else {
            //password didn't match
            Session::flash('error', 'Your passwords didn\'t match, please retype your password.');
            return Redirect::route('user.register')->with('error',Session::get('error',false));
        }

    }


    public function validate() {
        $email = Input::get('logEmail');
        $password = Input::get('logPass');
        $login = array(
            'email' => $email,
            'password' => $password
        );
        if (Auth::attempt($login)) {
            return Redirect::route('main')->with('info','Welcome back to the app!');
        }
        return Redirect::route('login.view')->with('error', 'Your username/password combination was incorrect.')->withInput();
    }
    public function logOut() {
        $status = userService::logout();
        return Redirect::route('main')->with('info','Successfully logged out');
    }
    public function userView(User $user = null) {
        return View::make('users.detail')->with('user', $user)->with('message',Session::get('message',false))->with('info',Session::get('info',false));
    }

    public function userUpdate(User $user) {
        $user = UserService::updateUser($user);
        return Redirect::route('user.app')->with('message','User was updated');
    }

    public function delete(User $user) {
        $user->delete();
        return Redirect::route('user.app')->with('message','User was deleted')->with('info',Session::get('info',false));
    }
}
