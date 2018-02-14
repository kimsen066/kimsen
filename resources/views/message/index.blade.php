<table border="3">
    <tr>
      <th>id</th>
      <th>author_id</th>
      <th>comment</th>
    </tr>
@foreach ($items as $item)
    <tr>
      <th>{{$item->id}}</th>
      <th>{{$item->author_id}}</th>
      <th>{{$item->comment}}</th>
    </tr>
@endforeach
</table>
<td><a href="{{url('author')}}">author</a></td>
