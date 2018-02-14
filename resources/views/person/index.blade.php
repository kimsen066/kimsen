<table>
      <tr>
        <th>book_name</th>
        <th>book_introduction</th>
        <th>book_code</th>
      </tr>
  @foreach ($items as $item)
      <tr>
        <td>{{$item->book_name}}</td>
        <td>{{$item->book_introduction}}</td>
        <td>{{$item->book_code}}</td>
      </tr>
  @endforeach
</table>
