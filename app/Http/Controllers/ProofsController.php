<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProofsController extends Controller
{
    public function showall()
    {
        $projects = DB::table('projects')->get();

        return view('allprojects',
        [
            'allProjects' => $projects
        ]);
    }
    public function show()
    {
        $projects = DB::table('projects')->where()->first();

        return view('allprojects', [
        'allProjects' => $projects
        ]);
    }
}
