@extends('main')

@section('link')
<link rel="stylesheet" href="/css/main.css">
@endsection

@section('sidebar')
@parent
<p><a href="/view/profile"> мой профиль</a></p>
<p><a href="/view/news"> новое</a></p>
<p><a href="/view/messager"> сообщения</a></p>
@endsection

@section('content')
<div class="user">
  <img src="/anarchy.png" alt="no image" class="userImage">
  <!-- <div class="userPanel"> -->
  <div class="userInfo">
    <p class="userName"> {{$user}}</p>
    <p class="userAbout">Handshake official account.</p>
  </div>
  <p class="UserActions">add to Friend button</p>
  <!-- </div> -->
</div>
<div class="post">
  <p class="msg">
    Мы открылись!
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
