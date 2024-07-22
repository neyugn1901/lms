<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $template = 'user.index';
        return view('admin.layout', compact(
            'template'
        ));
    }
}
