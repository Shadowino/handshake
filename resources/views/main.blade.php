<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  @yield('link')
  <title>Handshake</title>
</head>
<body>
  <header>
    <h1><a href="/view/profile">Handshake.locale</a></h1>
  </header>
  <div class="page">
    <div class="sidebar">
      @section('sidebar')
      <p><a href="/view/welcome"> Добро пожаловать!</a></p>
      <!-- <p> point1</p> -->
      @show
    </div>
    <div class="content">
      @yield('content')
    </div>
  </div>
</body>
</html>
