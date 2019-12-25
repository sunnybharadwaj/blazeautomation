<?php

namespace App\Http\Controllers;

use App\Mail\MessageSubmitted;
use Illuminate\Http\Request;
use App\Message;


class MessageController extends Controller
{
    public function index()
    {
        return Message::all();
    }

    public function store(Request $request)
    {

//        if(request()->ajax()) {
//            return Response::json(request()->all);
//        }
//        $data = request()->except(['_token']);
//        Message::create($message);
        try {

            $message = new Message();
            $message->name = request('data.name');
            $message->email = request('data.email');
            $message->phone = request('data.phone');
            $message->location = request('data.location');
            $message->businesstype = request('data.businesstype');
            $message->message = request('data.message');
            $message->save();


            \Mail::to('dheerajdkeswani@gmail.com')
                ->queue(new MessageSubmitted($message));

            return $message;
//            session()->flash("message", "Thank you for submitting! We will get back to you shortly!");
//            return $message;

        } catch (QueryException $ex) {
            dd($ex);
            session()->flash("message", "Something is wrong. Please try later.");
        }



//        return json_encode($message)
//        http_response_code(201);
//        return Response::json([
//            'name' => $name
//        ], 201);

//        $to_name = "Blaze Automation";
//        $to_email = "sunny@chakradesign.co";
//
//        $data = array("name"=>"WattsUp.ai", "body" => "Test Email");
//
//        Mail::send("emails.message", $data, function($message) use ($to_name, $to_email) {
//            $message->to($to_email, $to_name)->subject("Laravel Test Mail");
//            $message->from("helper@chakradesign.co", "Test Mail");
//        });
    }
}
