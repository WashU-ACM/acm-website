<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{

		public function index()
		{
				$upcomings = array(
						array(
								"name" => "EnWeek ACM Showcase | <b>Oculus Rift Demo</b>",
								"tag" => "Demo",
								"poster" => NULL,
								"speaker" => "Han Liu &amp; Zach Glick",
								"date" => "TBD",
								"location" => "DUC",
								"description" => "Han and Zach are going to give a oculus rift demo during EnWeek after spring break. Come and check it out!",
						),
						array(
								"name" => "ACM Fireside Chat | <b>Spring 2017 Fireside Chat</b>",
								"tag" => "Fireside",
								"poster" => NULL,
								"speaker" => "Prof. Guerin, Prof. Cytron, Prof. Chamberlain",
								"date" => "Thursday 4/6 @ 6pm",
								"location" => "Atrium @ Jolley 5th",
								"description" => "CS students will have a chance to meet department heads and discuss about current curriculum. Free Maggiano's included!!",
						),
						array(
								"name" => "Invited Speaker | <b>Free Software Movement</b>",
								"tag" => "Invited",
								"poster" => NULL,
								"speaker" => "Richard Stallman",
								"date" => "Friday 4/18 @ 7pm",
								"location" => "DUC",
								"description" => "The one and only Richard Stallman is coming to Wash U and give us a speech about the free software movement!",
						),
				);

				// TODO: update past events
				$pasts = array();

				return view('events', ['pasts' => $pasts, 'upcomings' => $upcomings]);
		}

}
