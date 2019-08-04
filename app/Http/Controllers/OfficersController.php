<?php

namespace App\Http\Controllers;

class OfficersController extends Controller
{

    public function index()
    {
      $officer = array(
          array(
            "name" => "Elliott Battle",
            "title" => "Co-President",
            "image" => "/images/officers/elliott.jpg",
          ),
          array(
            "name" => "Roger Iyengar",
            "title" => "Co-President",
            "image" => "/images/officers/roger.jpg",
          ),
          array(
            "name" => "Ryan Wan",
            "title" => "Treasurer",
            "image" => "/images/officers/ryan.jpg",
          ),
          array(
            "name" => "Isaias Suarez",
            "title" => "Events",
            "image" => "/images/officers/isaias.jpg",
          ),
          array(
            "name" => "Zach Glick",
            "title" => "Events",
            "image" => "/images/officers/zach.jpg",
          ),
          array(
            "name" => "Han Liu",
            "title" => "Tech Director",
            "image" => "/images/officers/han.jpg",
          ),
          array(
            "name" => "Peter Olson",
            "title" => "Publicity",
            "image" => "/images/officers/peter.jpg",
          ),
          array(
            "name" => "Aaron Handleman",
            "title" => "Publicity",
            "image" => "/images/officers/aaron.jpg",
          ),
          array(
            "name" => "Julia Vogl",
            "title" => "Publicity",
            "image" => "/images/officers/julia.jpg",
          ),
          array(
            "name" => "Jackie Wong",
            "title" => "Freshman Outreach",
            "image" => "/images/officers/jackie.jpg",
          ),
          array(
            "name" => "Joseph(Joey) Ch Woodson",
            "title" => "ICPC",
            "image" => "/images/officers/joey.jpg",
          ),
          array(
            "name" => "John Xiahou",
            "title" => "ICPC",
            "image" => "/images/officers/john.jpg",
          ),
          array(
            "name" => "Rohit Kumar",
            "title" => "Secretary",
            "image" => "/images/officers/rohit.jpg",
          ),
          array(
            "name" => "Noah Luddy",
            "title" => "Historian",
            "image" => "/images/officers/noah.jpg",
          ),
          array(
            "name" => "Dennis Cosgrove",
            "title" => "Faculty advisor",
            "image" => "/images/officers/dennis.jpg",
          ),
          array(
            "name" => "David Ayeke",
            "title" => "Eternal President &amp; Supreme Leader-for-Life",
            "image" => "/images/officers/david.jpg",
          ),
        );
      try {
        app('db') -> connection() -> getPdo();
        $officers = app('db') -> select("SELECT * FROM officer WHERE year='2018' ORDER BY display_order ASC;");
      } catch (\PDOException $e) {
        $officers = [];
      }
      return view('officers', ['officers' => $officers]);
    }

}
