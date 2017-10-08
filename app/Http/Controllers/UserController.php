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

    public function highchart()
    {
        $viewer = View::select(DB::raw("SUM(id) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $viewer = array_column($viewer, 'count');

        $click = Click::select(DB::raw("SUM(id) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("id(created_at)"))
            ->get()->toArray();
        $click = array_column($click, 'count');
        return view('highchart')
            ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
            ->with('click',json_encode($click,JSON_NUMERIC_CHECK));
    }

}