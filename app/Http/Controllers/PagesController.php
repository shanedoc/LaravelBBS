<?php
/**
 * Created by PhpStorm.
 * User: xuke
 * Date: 2019/4/22
 * Time: 11:00
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{

    public function root(){
        return view('pages.root');
    }

}