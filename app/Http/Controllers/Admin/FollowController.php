<?php

namespace App\Http\Controllers\Admin;

use App\Models\Follow;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    public function getFollowList(){
        $followsData = Follow::select('id', 'email', 'created_at')->get()->toArray();
        return view('admin.module.follow.list', ['followsData'=>$followsData]);
    }
}
