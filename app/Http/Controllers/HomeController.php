<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use App\Message;
use Chikka;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(SendRequest $request)
    {
        $chikka = Chikka::send($request->mobile, $request->message);
        $form = $chikka->getForm()->get(['mobile', 'message', 'id']);
        $model = Message::create($form);

        dd($model);
    }

    public function find(Message $message)
    {
        return Message::find($message);
    }
}
