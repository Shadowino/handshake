@extends('main')

@section('link')
<link rel="stylesheet" href="/css/messager.css">
@endsection

@section('sidebar')
@parent
<p><a href="/view/profile"> мой профиль</a></p>
<p><a href="/view/news"> новое</a></p>
<p><a href="/view/messager"> сообщения</a></p>
@endsection

@section('content')
<div class="post">
  <div class="message">
    <img src="/anarchy.png" alt="ni" class="msgImage">
    <div class="msgText">
      <div class="msgName">
        Handshake official
      </div>
      <div class="msgContent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
  <div class="message">
    <img src="/anarchy.png" alt="ni" class="msgImage">
    <div class="msgText">
      <div class="msgName">
        Handshake official
      </div>
      <div class="msgContent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
  <?php

  ?>
  <form class="editor" action="#" method="post">
    <div class="sendButton">
      <input class="inputForm" type="button" name="s" value="Отправить">
    </div>
    <div class="textInput">
      <textarea class="inputForm" type="text" name="message" value="" placeholder="Сообщение">

      </textarea>
    </div>
  </form>
</div>


@endsection
