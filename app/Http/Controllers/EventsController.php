<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{

		public function index()
		{
				$upcomings = array(
						array(
								"name" => "Invited Speaker | <b>Richard Stallman: Free Software Movement</b>",
								"tag" => "Invited",
								"poster" => "images/events/rs.png",
								"speaker" => "Richard Stallman",
								"date" => "Tuesday April 18th @ 7pm",
								"location" => "Tisch Commons @ DUC",
								"description" => "<b>\"Free Software and Your Freedom!\" </b>We're excited to bring in Richard Stallman on Tuesday, April 18th as part of the Trending Topics Lecture Series! Richard Matthew Stallman is a software developer and software freedom activist. He is also the founder of the GNU Project, the Free Software Foundation, and One True Emacs. ",
						),
				);

				// TODO: update past events
				$pasts = array(
					array(
							"name" => "ACM Fireside Chat | <b>Spring 2017 Fireside Chat</b>",
							"tag" => "Fireside",
							"poster" => "images/events/fs.png",
							"speaker" => "Dr. Guerin &amp; Dr. Cytron",
							"date" => "Thursday April 6th @ 6pm",
							"location" => "Atrium @ Jolley 5th floor",
							"description" => "<b>Come for the Maggiano's, Stay for the Chat. </b>Members of the department (like Dr. Cytron and Dr. Guerin) will be there to discuss what's upcoming in the CSE department and to answer any questions students may have. There will also be free food from Maggiano's!",
					),
					array(
							"name" => "Course Registration Discussion | <b>Fall 2017 Course Spoiler</b>",
							"tag" => "CRD",
							"poster" => "images/events/crd.png",
							"speaker" => "ACM Senior Course Critics",
							"date" => "Tuesday April 4th @ 6 pm",
							"location" => "Gregg Technology Center(GTC) @ South 40 STS",
							"description" => "<b>Hear about courses from those who have taken them. </b>Before you make a choice about what courses to take in the Fall, come to Course Registration Discussion! Former students and TA's will give you their opinion on the courses being offered next year and the professors teaching them. We will go through ALL FALL 2017 COURSES!!! There will be free food!",
					),
					array(
							"name" => "EnWeek ACM Showcase | <b>Oculus Rift Demo</b>",
							"tag" => "Demo",
							"poster" => NULL,
							"speaker" => "Han Liu &amp; Zach Glick",
							"date" => "Friday March 24th @ 5pm",
							"location" => "Tisch Commons @ DUC",
							"description" => "Han and Zach are going to give a oculus rift demo during EnWeek after spring break. Come and check it out!",
					),
					array(
							"name" => "ACM Dev Team | <b>Master Command Line",
							"tag" => "Dev Team",
							"poster" => "images/events/dt.png",
							"speaker" => "Isaias Suarez",
							"date" => "Saturday February 25th @ 4-6 PM",
							"location" => "Gregg Technology Center(GTC) @ South 40 STS",
							"description" => "Learn how to be a master of command line. Tips and tricks to speed up your work flow.",
					),
					array(
							"name" => "Tuesday Tech Talk | <b>Python: 0 to production",
							"tag" => "T3",
							"poster" => "images/events/t3.png",
							"speaker" => "Roger Iyengar",
							"date" => "Tuesday February 28th @ 7 PM",
							"location" => "Gregg Technology Center(GTC) @ South 40 STS",
							"description" => "Roger is going to give you a tour through the lovely Python programming language. Going from 0 to production. Real practical staffs that you should never miss.",
					),
				);

				return view('events', ['pasts' => $pasts, 'upcomings' => $upcomings]);
		}

}
