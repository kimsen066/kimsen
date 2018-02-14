<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
      protected $guarded = array('id');

      public static $rules = array(
          'author_id' => 'required',
          'comment' => 'required'
        );
      public static $messages = [
          'author_id.required' => 'please send to your author_id',
          'comment.required' => 'please send to your comment'
        ];
      public function getData()
      {
          return $this->id.':'.$this->comment;
      }
}
