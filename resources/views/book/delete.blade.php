<table>
  <form action="" method="post">
      {{csrf_field( )}}
    <input type="hidden" name="id" value="{{$form->id}}">

    <tr><th>book_name</th><td>{{$form->book_name}}></td></tr>
    <tr><th>book_introduction</th><td>{{$form->book_introduction}}</td></tr>
    <tr><th>book_code</th><td>{{$form->book_code}}</td></tr>
    <tr><th></th><td><input type="submit" value="delete"></td></tr>
  </form>
</table>
  <td><a href="{{url('book')}}">index</a></td>
