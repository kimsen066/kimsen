
  <table>
    <form action="" method="post">
      {{ csrf_field() }}
      @if ($errors -> has('author_id'))
        <tr>
          <th>ERROR</th>
          <td>{{ $errors -> first('author_id') }}</td>
        </tr>
      @endif
      <tr>
        <th>author_id</th>
        <td><input type="number" name="author_id" value="{{old('author_id')}}"></td>
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
