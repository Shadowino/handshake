@extends('main')

@section('content')
<h1>Добро пожаловать!</h1>
<p>
Этот проект "Handshake" создан для всех желающих развиваться в технических направлениях и
иметь возможность общаться с такими же технарями как и вы. вы можете
<a href="#">зарегистрироваться</a> или <a href="#">войти</a>
</p>
@endsection

@section('sidebar')
  @parent
  <p><a href="/view/register"> Зарегистрироваться</a></p>
  <p><a href="/view/login"> Войти</a></p>
@endsection
