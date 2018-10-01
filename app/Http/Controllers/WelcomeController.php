<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class WelcomeController extends Controller
{

    public function index()
    {
        return view('join')->with('submitted', false);
    }

    public function store(Request $request)
    {

        $inputs = $request->all();
        if ($inputs['gradyear'] === "N/A") {
            $inputs['gradyear'] = "";
        }

        $api_key = env('API_KEY');
        $client = new Client(['base_uri' => 'https://us3.api.mailchimp.com/3.0/']);

        try {

            if (isset($inputs['exec'])) {
                $client->request('POST', 'lists/f5217515f7/members/', [
                    'auth' => ['user', $api_key],
                    'json' => [
                        'email_address' => $inputs['email'],
                        'status' => "subscribed",
                        'merge_fields' => [
                            'FNAME' => $inputs['fname'],
                            'LNAME' => $inputs['lname'],
                            'GRADYEAR' => $inputs['gradyear'],
                            'AFFIL' => $inputs['affil']
                        ]
                    ]
                ]);
            }

            $client->request('POST', 'lists/e5947d8009/members/', [
                'auth' => ['user', $api_key],
                'json' => [
                    'email_address' => $inputs['email'],
                    'status' => "subscribed",
                    'merge_fields' => [
                        'FNAME' => $inputs['fname'],
                        'LNAME' => $inputs['lname'],
                        'GRADYEAR' => $inputs['gradyear'],
                        'AFFIL' => $inputs['affil']
                    ],
                    'interests' => [
                        '7fbd5e46fa' => isset($inputs['exec'])
                    ]
                ]
            ]);

            if ($inputs['fname'] === "") {
                $message = "You have been subscribed. Welcome!";
            } else {
                $message = "You have been subscribed. Welcome to ACM, " . $inputs['fname'] . "!";
            }

        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $error_body = json_decode($e->getResponse()->getBody(), true);
                if ($error_body['title'] === 'Member Exists') {
                    try {

                        if (isset($inputs['exec'])) {
                            $client->request('PATCH', 'lists/f5217515f7/members/' . md5($inputs['email']), [
                                'auth' => ['user', $api_key],
                                'json' => [
                                    'status' => "subscribed",
                                    'merge_fields' => [
                                        'FNAME' => $inputs['fname'],
                                        'LNAME' => $inputs['lname'],
                                        'GRADYEAR' => $inputs['gradyear'],
                                        'AFFIL' => $inputs['affil']
                                    ]
                                ]
                            ]);
                        }

                        $client->request('PATCH', 'lists/e5947d8009/members/' . md5($inputs['email']), [
                          'auth' => ['user', $api_key],
                          'json' => [
                            'status' => "subscribed",
                            'merge_fields' => [
                              'FNAME' => $inputs['fname'],
                              'LNAME' => $inputs['lname'],
                              'GRADYEAR' => $inputs['gradyear'],
                              'AFFIL' => $inputs['affil']
                            ],
                            'interests' => [
                              '7fbd5e46fa' => isset($inputs['exec'])
                            ]
                          ]
                        ]);

                        if ($inputs['fname'] === "") {
                            $message = 'Hi, your subscription status has been updated!';
                        } else {
                            $message = 'Hi ' . $inputs['fname'] . ', your subscription status has been updated!';
                        }

                    } catch (RequestException $e) {
                        unset($message);
                    }
                }
            }
        }

        if (!isset($message)) {
            if ($inputs['fname'] === "") {
                $message = "Sorry, request failed. Please try again later.";
            } else {
                $message = "Sorry " . $inputs['fname'] . ", request failed. Please try again later.";
            }
        }

        return view('join', ['submitted' => true, 'message' => $message]);

    }

}
