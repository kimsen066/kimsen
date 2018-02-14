
  <table>
    <form action="" method="post">
      {{ csrf_field() }}
      @if ($errors -> has('book_name'))
        <tr><th>ERROR</th><td>{{ $errors -> first('book_name') }}</td><tr>
      @endif
      <tr><th>book_name</th><td><input type="text" name="book_name" value="{{ old('book_name') }}"></td></tr>
      @if ($errors -> has('book_introduction'))
        <tr><th>ERROR</th><td>{{ $errors -> first('book_introduction') }}</td><tr>
      @endif
      <tr><th>book_introduction</th><td><input type="text" name="book_introduction" value="{{ old('book_introduction') }}"></td></tr>
      @if ($errors -> has('book_code'))
        <tr><th>ERROR</th><td>{{ $errors -> first('book_code') }}</td><tr>
      @endif
      <tr><th>book_code</th><td><input type="text" name="book_code" value="{{ old('book_code') }}"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
  </table>
