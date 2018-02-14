<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
      protected $guarded = array('id');

      public static $rules = array(
          'name' => 'required',
          'age' => 'required',
          'comment' => 'required'
        );
      public static $messages = [
          'name.required' => 'please send to your name',
          'age.required' => 'please send to your age',
          'comment.required' => 'please send to your comment'
        ];
      public function getData()
      {
          return $this->id.':'.$this->name.'('.$this->age.')'.'('.$this->comment.')';
      }
      public function messages()
      {
          return $this->hasMany('App\Message');
      }
}
