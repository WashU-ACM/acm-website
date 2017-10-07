<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{

    public function index()
    {
      $results = app('db')->select("SELECT * FROM projects;");
      return view('projects', ['projects' => $results]);
    }

}
