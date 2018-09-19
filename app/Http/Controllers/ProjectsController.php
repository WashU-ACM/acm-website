<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{

    public function index()
    {
      try {
        app('db') -> connection() -> getPdo();
        $results = app('db')->select("SELECT * FROM projects;");
      } catch (\PDOException $e) {
        $results = [];
      }
      return view('projects', ['projects' => $results]);
    }

}
