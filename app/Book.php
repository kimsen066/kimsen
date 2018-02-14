<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'book_name' => 'required',
        'book_introduction' => 'required',
        'book_code' => 'integer|min:0|max:99999'
      );
    public static $messages = [
        'book_name.required' => 'please send',
        'book_introduction.required' => 'required',
        'book_code.integer' => 'please send',
        'book_code.min' => 'min 0',
        'book_code.max' => 'max 99999'
      ];
}
