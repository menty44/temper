<?php
/**
 * Created by IntelliJ IDEA.
 * User: fred
 * Date: 10/8/17
 * Time: 12:38 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Users;
use App\Transformer\UserTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App;



class UserController
{

    public function welcome(){

        $users = App\Users::all();
//        return $users->toArray();
        return $users->toJson();
    }

    public function usercount(){

        $users = App\Users::count();
        return $users;

    }

    public function chart(){

        return view('highchart');
    }

}