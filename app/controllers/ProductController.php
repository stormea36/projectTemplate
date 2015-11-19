<?php

class DataController extends BaseController {

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

    public function ajaxSave()
    {
        $json = file_get_contents("php://input");
        log::debug('showing the json string'.$json);
        $url = public_path()."/test.json";
        $fileData = json_decode(file_get_contents($url));
        $fileData[] = json_decode($json);

        $dataAsJson = json_encode($fileData);
        file_put_contents($url,$dataAsJson);
        echo '{seems to have worked ]';
//        $url = urldecode($url);
//
//        $file = fopen($url,'a');
////        fputs($file,PHP_EOL.'$inventory[].push('.$json.');');
//        fwrite($file,$json);
//        fclose($file);
    }
}
