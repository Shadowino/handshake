@extends('main')

@section('link')
<link rel="stylesheet" href="/css/main.css">
@endsection

@section('sidebar')
@parent
<p><a href="/view/profile"> мой профиль</a></p>
<p><a href="/view/news"> новое</a></p>
<p><a href="/view/message"> сообщения</a></p>
@endsection

@section('content')
<div class="block hat">
  <p class="msg">User</p>
</div>
<div class="block post">
  <p class="msg">
    В любой книге для выделения следующего абзаца используется отступ первой
    строки, еще называемый «красная строка». Это позволяет читателю легко отыскивать
    взглядом новую строку и повышает, таким образом, читабельность текста.
    На веб-странице этот прием обычно не используется, а для разделения абзацев
    применяется отбивка.
  </p>
</div>

<?php
for ($post=1; $post <= 5; $post++) {
  echo "<div class='block post'>";
  echo "<p class='msg'>";
  echo "пост №$post <br>";
  echo "В любой книге для выделения следующего абзаца используется отступ первой";
  echo "строки, еще называемый «красная строка». Это позволяет читателю легко отыскивать";
  echo "взглядом новую строку и повышает, таким образом, читабельность текста.";
  echo "На веб-странице этот прием обычно не используется, а для разделения абзацев";
  echo "применяется отбивка.</p></div>";
}
?>

@endsection
