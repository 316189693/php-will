<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use Illuminate\Http\Request;

class DeptController extends Controller
{
   public function index(Request $request) {
       $rst = Dept::find(4);
       return json_encode($rst, JSON_UNESCAPED_UNICODE);
   }
}
