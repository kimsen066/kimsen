<?php

namespace App\Http\Controllers;

use App\Book;
use Validator;

use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index(Request $request)
   {
     $items = Book::all();
     return view('book.index',['items' => $items]);
   }

   public function find(Request $request)
   {
     $item = Book::find($request->id);
     $data = ['item' => $item];
     return view('book.find',$data);
   }

   public function add(Request $request)
   {
     if($request->isMethod('get')) {
     return view('book.add');
   } else{
     $validator = Validator::make($request->all(), Book::$rules, Book::$messages);
     if($validator->fails()) {
       return redirect('book/add')
         ->withErrors($validator)
         ->withInput();
     }else {
     $book = new Book;
     $form = $request->all();
     unset($form['_token']);
     $book->fill($form)->save();
     return redirect('book');
     }
    }
   }

   public function edit(Request $request) {
     if($request->isMethod('get')) {
       $book = Book::find($request->id);
       return view('book.edit',['form' => $book]);
   } else{
     $validator = Validator::make($request->all(), Book::$rules, Book::$messages);
     if($validator->fails()) {
       return redirect('edit/'.$request->id)
         ->withErrors($validator)
         ->withInput();
     }
     $book = Book::find($request->id);
     $form = $request->all();
     unset($form['_token']);
     $book->fill($form)->save();
     return redirect('book');
     }
    }

    public function delete(Request $request) {
      $book = Book::find($request->id);
      return view('book.delete',['form' => $book]);
    }

    public function remove(Request $request) {
      Book::find($request->id)->delete();
      return redirect('book');
    }


   }
