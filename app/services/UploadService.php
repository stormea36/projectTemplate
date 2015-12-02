<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UploadService {
    
    public static function newImg() {
        $img = Input::file('image');
        $temp = new Upload();
        if($img) {
            $file = UploadService::post_upload();
            $temp->file = $file;
            $temp->thumb = $file;
            $temp->userId = Auth::user()->email;
            $temp->save();
            return $temp;
        }
    }
    
//    public static function post_upload() {
//        $file = Input::file('image');
//        $extension = $file->getClientOriginalExtension();
//        $filename = (sha1(time() . time()) . "." . $extension);
//        $path = public_path() . Config::get('uploads.path');
//        
//        Image::make($file->getRealPath())
//                ->save($path.'og-'.$filename)
//                ->resize('100','100',true)
//                ->save($path.'th-'.$filename)
//                ->destroy();
//        $input = Config::get('uploads.path') . $filename;
//        return $input;
//    }
        public static function post_upload() {
        $file = Input::file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = (sha1(time() . time()) . "." . $extension);
        $path = public_path() . Config::get('uploads.path');
        
        $file->move($path, $filename);
        $input = Config::get('uploads.path') . $filename;
        return $input;
    }
    
    public static function userImages() {
        if(Auth::check()) {
            $email = Auth::user()->email;
            $uploads = DB::table('uploads')->where('user',$email)->get();
            
            return $uploads;
        }
        else {
            return null;
        }
            
    }
}