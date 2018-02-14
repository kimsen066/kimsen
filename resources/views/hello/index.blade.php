
  <table>
    <form action="hello" method="post">
      {{ csrf_field() }}
      @if ($errors -> has('name'))
        <tr><th>ERROR</th><td>{{ $errors -> first('name') }}</td><tr>
      @endif
        <tr><th>name: </th><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>

      @if ($errors->has('mail'))
        <tr><th>ERROR</th><td>{{ $errors -> first('mail') }}</td></tr>
      @endif
        <tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>

      @if ($errors->has('age'))
        <tr><th>ERROR</th><td>{{ $errors -> first('age') }}</td></tr>
      @endif
        <tr><th>age: </th><td><input type="text" name="age" value="{{ old('age') }}"></td></tr>

      @if ($errors->has('gender'))
        <tr><th>ERROR</th><td>{{ $errors -> first('gender') }}</td></tr>
      @endif
        <tr>
          <th>gender: </th>
          <td>
            man
            <input type="radio" name="gender" value="man"
              @if ( old('gender') == 'man' )
                checked
              @endif
            >
            women
            <input type="radio" name="gender" value="women"
              @if (old('gender') == 'women')
                checked
              @endif
            >
          </td>
        </tr>

      @if ($errors->has('subject'))
        <tr><th>ERROR</th><td>{{ $errors -> first('subject') }}</td></tr>
      @endif
        <tr><th>subject: </th><td><select name="subject" value="subject">
            <option value = "">choose</option>
            <option value = "computer"
              @if (old('subject') == 'computer')
                chenked
              @endif
              >computer</option>
            <option value = "english"
              @if (old('subject') == 'english')
                chenked
              @endif
            >english</option>
        </select>

        @if ($errors->has('subject111'))
          <tr><th>ERROR</th><td>{{ $errors -> first('subject111') }}</td></tr>
        @endif
          <tr><th>subject111: </th><td><select multiple ="multiple" name = "subject111" value = "subject111">
              <option value = "">choose</option>
              <option value = "computer111"
                @if (old('subject111') == 'computer111')

                @endif
                >computer111</option>
              <option value = "english111"
                @if (old('subject111') == 'english111')

                @endif
              >english111</option>
          </select>

        @if ($errors->has('os'))
          <tr><th>ERROR</th><td>{{ $errors -> first('os') }}</td></tr>
        @endif
          <tr>
            <th>
            <td>
              windows<input type = "checkbox" name= "os" value = "windows"
                @if (old("os") == "windows")
                  checked
                @endif
              >
              linux<input type = "checkbox" name ="os" value = "linux"
                @if (old("os") == "linux")
                  checked
                @endif
              >
            </td>
          </tr>

        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
  </table>





































<html>
<head>
<title>Hello/Index</title>
<style>
body{font-size:50pt;color:lightblue;}
h1{font-size:100pt;text-align:right;color:lightblue;
margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>laravel</h1>

<p><body><?php echo date("Y年n月j日");?></body></p>



</body>
</html>
