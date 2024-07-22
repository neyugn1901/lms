<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    

    public function index(){
        $template = 'course.index';
        return view('admin.layout', compact(
            'template'
        ));
    }
}
