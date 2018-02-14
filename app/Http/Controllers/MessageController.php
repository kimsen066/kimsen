<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use Validator;

class MessageController extends Controller
{
        public function index(Request $request)
       {
         $items = Message::all();
         return view('message.index',['items' => $items]);
       }

       public function add(Request $request)
       {
         if($request->isMethod('get')) {
         return view('message.add');
       } else{
            $validator = Validator::make($request->all(), Message::$rules, Message::$messages);
         if($validator->fails()) {
            return redirect('message/add')
              ->withErrors($validator)
              ->withInput();
         }else {
            $message = new Message;
            $form = $request->all();
            unset($form['_token']);
            $message->fill($form)->save();
            return redirect('message');
          }
         }
        }

}
