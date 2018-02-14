@if(isset($item))
<table border="1">
  <tr>
    <th>id</th><td>{{$item->id}}</td>
  </tr>
  <tr>
    <th>book_name</th><td>{{$item->book_name}}</td>
  </tr>
  <tr>
    <th>book_introduction</th><td>{{$item->book_introduction}}</td>
  </tr>
  <tr>
    <th>book_code</th><td>{{$item->book_code}}</td>
  </tr>
</table>
@else
<p>nnnnnnnnnn</p>
@endif
<a href="{{url('book')}}">back</a>
