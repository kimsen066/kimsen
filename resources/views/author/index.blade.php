    <form action = "" method = "get">
      {{  csrf_field()  }}
    name<input type = "text" name = "input" value = "{{$input}}">
    <input type = "submit" value = "search">
    </form>
    @if (isset($finds))
    <table border="5">
    <tr>
      <th>Author</th>
    </tr>
    <tr>
      <th>{{ $finds->getData() }}</th>
    </tr>
    </table>
    @endif
<p><?php echo date("Y年n月j日");?></p>
    <table border="1">
    <tr>
      <th>Author</th>
      <th>Message</th>
    </tr>
      @foreach ($items as $item)
     <tr>
      <th>{{$item->getData()}}</th>
      <th>
      @if ($item->messages !=null)
        <table width="100%">
        @foreach ($item->messages as $obj)
      <tr>
      <th>{{$obj->getData()}}</th>
      </tr>
        @endforeach
        </table>
        @endif
       </th>
      </tr>
       @endforeach
    </table>
    <td><a href="{{url('author/add')}}">add</a></td>
