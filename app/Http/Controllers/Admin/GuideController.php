<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuideController extends Controller
{
    public function getGuideList(){
        return view ('admin.module.guide.list');
    }
}
