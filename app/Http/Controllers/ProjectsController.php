<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{

    public function index()
    {
      $results = app('db')->select("SELECT * FROM acm_projects;");
      return view('projects', ['projects' => $results]);
    }

}
