<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{

		public function index()
		{

				// TODO: update past events
				$pasts = array(
					array(
							"title" => "GBM | <b>Fall 2017 General Body Meeting</b>",
							"tag" => "GBM",
							"poster" => NULL,
							"speaker" => "Rohit Kumar",
							"date" => "Tuesday September 26th @ 6-7 PM",
							"location" => "Room 204 @ Seigle Hall",
							"description" => "General Body Meeting for the fall semester! Come to know about what ACM is, what do we do, and what resources you can get from us.",
					),
					array(
							"title" => "Workshop | <b>Game Development Tutorial</b>",
							"tag" => "Workshop",
							"poster" => NULL,
							"speaker" => "Isaias Suarez",
							"date" => "Saturday April 22th @ 4-6 PM",
							"location" => "Gregg Technology Center(GTC) @ South 40 STS",
							"description" => "Come learn to make video games in Unity and GameMaker. We will be hosting a game development tutorial on Saturday, April 22nd, from 4pm - 6pm in the Gregg Technology Center at the back of STS on the South 40. ",
					),
					array(
							"title" => "Invited Speaker | <b>Richard Stallman: Free Software Movement</b>",
							"tag" => "Invited",
							"poster" => "images/events/rs.png",
							"speaker" => "Richard Stallman",
							"date" => "Tuesday April 18th @ 7 PM",
							"location" => "Tisch Commons @ DUC",
							"description" => "<b>\"Free Software and Your Freedom!\" </b>We're excited to bring in Richard Stallman on Tuesday, April 18th as part of the Trending Topics Lecture Series! Richard Matthew Stallman is a software developer and software freedom activist. He is also the founder of the GNU Project, the Free Software Foundation, and One True Emacs. ",
					),
					array(
							"title" => "ACM Fireside Chat | <b>Spring 2017 Fireside Chat</b>",
							"tag" => "Fireside",
							"poster" => "images/events/fs.png",
							"speaker" => "Dr. Guerin &amp; Dr. Cytron",
							"date" => "Thursday April 6th @ 6 PM",
							"location" => "Atrium @ Jolley 5th floor",
							"description" => "<b>Come for the Maggiano's, Stay for the Chat. </b>Members of the department (like Dr. Cytron and Dr. Guerin) will be there to discuss what's upcoming in the CSE department and to answer any questions students may have. There will also be free food from Maggiano's!",
					),
					array(
							"title" => "Course Registration Discussion | <b>Fall 2017 Course Spoiler</b>",
							"tag" => "CRD",
							"poster" => "images/events/crd.png",
							"speaker" => "ACM Senior Course Critics",
							"date" => "Tuesday April 4th @ 6 PM",
							"location" => "Gregg Technology Center(GTC) @ South 40 STS",
							"description" => "<b>Hear about courses from those who have taken them. </b>Before you make a choice about what courses to take in the Fall, come to Course Registration Discussion! Former students and TA's will give you their opinion on the courses being offered next year and the professors teaching them. We will go through ALL FALL 2017 COURSES!!! There will be free food!",
					),
					array(
							"title" => "EnWeek ACM Showcase | <b>Oculus Rift Demo</b>",
							"tag" => "Demo",
							"poster" => NULL,
							"speaker" => "Han Liu &amp; Zach Glick",
							"date" => "Friday March 24th @ 5 PM",
							"location" => "Tisch Commons @ DUC",
							"description" => "Han and Zach are going to give a oculus rift demo during EnWeek after spring break. Come and check it out!",
					),
					array(
							"title" => "Tuesday Tech Talk | <b>Python: 0 to production",
							"tag" => "T3",
							"poster" => "images/events/t3.png",
							"speaker" => "Roger Iyengar",
							"date" => "Tuesday February 28th @ 7 PM",
							"location" => "Gregg Technology Center(GTC) @ South 40 STS",
							"description" => "Roger is going to give you a tour through the lovely Python programming language. Going from 0 to production. Real practical staffs that you should never miss.",
					),
					array(
							"title" => "ACM Dev Team | <b>Master Command Line",
							"tag" => "Dev Team",
							"poster" => "images/events/dt.png",
							"speaker" => "Isaias Suarez",
							"date" => "Saturday February 25th @ 4-6 PM",
							"location" => "Gregg Technology Center(GTC) @ South 40 STS",
							"description" => "Learn how to be a master of command line. Tips and tricks to speed up your work flow.",
					),
				);
				$upcomings = app('db') -> select("SELECT * FROM events WHERE date >= NOW() ORDER BY date ASC;");
				$upcomings = json_decode(json_encode($upcomings), True);
				return view('events', ['pasts' => $pasts, 'upcomings' => $upcomings]);
		}

}
