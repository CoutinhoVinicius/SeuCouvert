<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Seu Couvert</title>      
    
    <!-- Bootstrap core CSS -->
    <link href="landpage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="landpage/vendor/css/heroic-features.css" rel="stylesheet">

    
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand-image" href="index.html"><img class="navbar-brand-image" src="landpage/vendor/images/Logo/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="credenciados.html">Credenciados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agenda.html">Agenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quem Somos</a>
        </li>
        <li class="nav-item">
          <input type="text"  style="margin-top:4px; border-radius:5px" name="username" placeholder="Buscar">&nbsp &nbsp
        </li>
        <li class="nav-item">
          <button class="btn btn-danger" type="button"  style="margin-top:2px; margin-right: 5px;"> Buscar</button>
        </li>
     </ul>
    </div>
  </div>
</nav>
    
 <!-- Page Content -->
<div class="container">
        @yield('content')   

@section('content')
