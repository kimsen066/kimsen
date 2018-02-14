<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Validator;

  class HelloController extends Controller
{
    public function index(Request $request)
    {
      if($request->isMethod('get')) {

        return view('hello.index');
      } else {
        $rules = [
          'name' => 'required',
          'mail' => 'email',
          'age' => 'numeric|between:0,150',
          'gender' => 'required',
          'subject' => 'required',
          'subject111' => 'required',
          'os' => 'required'
        ];

        $messages = [
          'name.required' => 'please send to name',
          'mail.email' =>'please send to mail',
          'age.numeric' => 'please send to age',
          'age.between' => '0~150',
          'gender' => 'please choose to gender',
          'subject' => 'please choose to subject',
          'subject111' => 'please choose to subject111',
          'os' => 'please choose to os',

        ];

      $validator = Validator::make($request->all(), $rules, $messages);
      if($validator->fails()) {
        return redirect('/hello')
          ->withErrors($validator)
          ->withInput();
      }
      return view('hello.1');
     }
   }
}






    /*$validate_rule = [
      'name' => 'required',
      'mail' => 'email',
      'age' => 'numeric|between:0,150',
    ];
    $this->validate($request,$validate_rule);
    return view('hello.index',['msg'=>'please ture to send!']);*/




























  //return <<<EOF
  /*$html = <<<EOF
  <html>
  <head>
  <title>Hello/Index</title>
  <style>
  body{font-size:16pt;color:#999;}
  h1{font-size:100pt;text-align:right;color:#eee;
  margin:-40px 0px -50px 0px;}
  </style>
  </head>
  <body>
  <h1>hello</h1>
  <h3>request</h3>
  <pre>{$request}</pre>
  <h3>response</h3>
  <pre>{$response}</pre>
  </body>
  </html>
EOF;
  $response->setcontent($html)*/
