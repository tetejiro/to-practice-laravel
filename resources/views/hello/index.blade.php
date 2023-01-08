<html>
  <head>
    <title>Hello/Index</title>
    <style>
      body {font-size:16px; color:#999; }
      h1 {font-size:120pt; text-align:right; color:#fafafa; margin:-50px 0px -120px 0px;}
    </style>
  </head>
  <body>
    <h1>Blade/Index</h1>
    @isset($msg)
      <p>こんにちは{{$msg}}さん</p>
    @else
      <p>何か書いてください。</p>
    @endisset
      <form method="POST" action="/hello">
        @csrf
        <input type="text" name="msg">
        <input type="submit">
      </form>
  </body>
</html>