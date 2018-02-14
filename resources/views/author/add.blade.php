
  <table>
    <form action="" method="post">
      {{ csrf_field() }}
      @if ($errors -> has('name'))
        <tr>
          <th>ERROR</th>
          <td>{{ $errors -> first('name') }}</td>
        <tr>
      @endif
      <tr>
        <th>author_name</th>
        <td><input type="text" name="name" value="{{old('name')}}"></td>
      </tr>

      @if ($errors -> has('age'))
        <tr>
          <th>ERROR</th>
          <td>{{ $errors -> first('age') }}</td>
        <tr>
      @endif
        <tr>
          <th>age</th>
          <td><input type="number" name="age" value="{{old('age')}}"></td>
       </tr>

      @if ($errors -> has('comment'))
        <tr>
          <th>ERROR</th>
          <td>{{ $errors -> first('comment') }}</td>
        </tr>
      @endif
      <tr>
        <th>comment</th>
        <td><textarea name="comment" rows="9" cols="90"></textarea></td>
      </tr>
      <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
      </tr>
    </form>
  </table>
