<?php
/**
 * Created by PhpStorm.
 * User: xuke
 * Date: 2018/12/26
 * Time: 17:38
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function info(Request $request){
        $user = Auth::user();
        return view('pages.info',compact('user'));
    }

    public function modify(Request $request){

    }

}