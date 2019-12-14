<?php

namespace App\Http\Controllers;

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
        $data = request()->except(['_token']);
//        Message::create($message);
        try {

            $message = new Message();
            $message->name = request('name');
            $message->email = request('email');
            $message->phone = request('phone');
            $message->location = request('location');
            $message->businesstype = request('businesstype');
            $message->message = request('message');
            $message->save();

            session()->flash("message", "Thank you for submitting! We will get back to you shortly!");

        } catch (QueryException $ex) {
            dd($ex);
            session()->flash("message", "Something is wrong. Please try later.");
        }


        return redirect('/contact-us');
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