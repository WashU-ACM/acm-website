<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{

		public function show()
		{
				$upcomings = array(
						array(
								"name" => "EnWeek ACM Showcase | <b>Oculus Rift</b>",
								"tag" => "Demo",
								"poster" => NULL,
								"speaker" => "Han Liu &amp; Zach Glick",
								"date" => "TBD",
								"location" => "TBD",
								"description" => "Han and Zach are going to give a oculus rift demo during EnWeek after spring break. Come and check it out!",
						),
						array(
								"name" => "Invited Speaker | <b>Free Software Movement</b>",
								"tag" => "Invited",
								"poster" => NULL,
								"speaker" => "Richard Stallman",
								"date" => "TBD",
								"location" => "TBD",
								"description" => "The famous Richard Stallman is coming to Wash U, and give us a speech about the free software movement!",
						),
						array(
								"name" => "ACM Fireside Chat | <b>Spring 2017 Fireside Chat</b>",
								"tag" => "Fireside",
								"poster" => NULL,
								"speaker" => "TBD",
								"date" => "TBD",
								"location" => "TBD",
								"description" => "CS students will have a chance to meet department heads and discuss about current curriculum.",
						),
				);

				// TODO: update past events
				$pasts = array();

				return view('events', ['pasts' => $pasts, 'upcomings' => $upcomings]);
		}

}
