  <table border="3">
      <tr>
        <th>id</th>
        <th>book_name</th>
        <th>book_introduction</th>
        <th>book_code</th>
        <th>view</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
  @foreach ($items as $item)
      <tr>
        <th>{{$item->id}}</th>
        <th>{{$item->book_name}}</th>
        <th>{{$item->book_introduction}}</th>
        <th>{{$item->book_code}}</th>
        <th><a href="find/{{$item->id}}">view</a></th>
        <th><a href="edit/{{$item->id}}">edit</a></th>
        <th><a href="book/delete/{{$item->id}}">delete</a></th>
      </tr>
  @endforeach
  </table>
  <td><a href="{{url('book/add')}}">add</a></td>
