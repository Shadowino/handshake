@extends('main')

@section('link')
<link rel="stylesheet" href="/css/register.css">
<link rel="stylesheet" href="/css/form.css">
@endsection

@section('sidebar')
@parent
<p><a href="/view/register"> Зарегистрироваться</a></p>
<p><a href="/view/login"> Войти</a></p>
@endsection

@section('content')
<div class="window centered">
  <h2 class="auth">Регистрация</h2>
  <form class="" action="#" method="get">
    <input type="text" name="name" value="" placeholder="Имя" required>
    <input type="text" name="nickname" value="" placeholder="никнейм" >
    <input type="text" name="password" value="" placeholder="пароль" required>
    <input type="submit" name="" value="Зарегистрироваться">
  </form>
  <p>уже зарегистрированы? <a href="/view/login"> Войти</a> !</p>
</div>
@endsection
