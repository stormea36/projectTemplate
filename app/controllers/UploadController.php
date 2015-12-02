<?php

class UploadController extends BaseController {

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
        
        public function home() {
            $images = UploadService::userImages();

            if(!$images) {
                return Redirect::to('user/login')->with('message', 'You must sign in first');
            }
            return View::make('uploads.home')->with('images', $images)->with('message',Session::get('message',false));
        }
        public function upload() {
            
            return View::make('uploads.upload');
        }
        public function create() {
            $upload = UploadService::newImg();
            return Redirect::to('upload')->with('message', 'your image was loaded');
        }
        

}
