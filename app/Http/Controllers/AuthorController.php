<?php

namespace App\Http\Controllers;
//123456
use Illuminate\Http\Request;
use App\Author;

use Validator;

class AuthorController extends Controller
{
        public function index(Request $request)
       {
         if ($request->isMethod('post')) {
           $items = Author::all();
           return view('author.index',['items' => $items,'input' => '']);
         }else{
         $items = Author::all();
         $finds = Author::find($request->input);
         $param = ['input' => $request->input, 'items' => $items,'finds' => $finds];
         return view('author.index',$param);
          }
        }
       public function add(Request $request)
       {
         if($request->isMethod('get')) {
         return view('author.add');
       } else{
            $validator = Validator::make($request->all(), Author::$rules, Author::$messages);
         if($validator->fails()) {
            return redirect('author/add')
              ->withErrors($validator)
              ->withInput();
         }else {
            $author = new Author;
            $form = $request->all();
            unset($form['_token']);
            $author->fill($form)->save();
            return redirect('author');
          }
         }
        }
        /*public function search(Request $request)
        {
            $item =　Author::where('name',$request->input)->first();
            $param = ['input' => $request->input,'item' => $item];
            return view('author.findd',$param)
        }*/

}
