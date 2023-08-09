{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
Le code marche très bien!!!
<form action="{{route('enregistrer')}}" method="post">
    @csrf
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="NOM:">
        <label for="floatingInput">NOM:</label>
      </div><br>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="PRENOM:">
        <label for="floatingInput">PRENOM:</label>

      </div><br>
<input type="date" name="date" placeholder="DATE DE NAISSANCE" id=""> <br><br>
<input type="number" name="phone" placeholder="TELEPHONE:" id=""> <br><br>
<input type="email" name="email"placeholder="EMAIL:" id=""> <br><br>
<input type="password" name="password" placeholder="MOT DE PASSE" id=""><br><br>
<input type="submit" value="Enregistrer" id="">

</form>
</body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

<link href= "{{ asset('css/connect.bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=1OXYj7-pKI-qesguB1n-jU-D8K7bCrzLzNZLpIl9aCEvKMxavdinVNGMAq5uPO-_hzt3sTQ3uVCxI5JICv6OaPT1pUM6ne_YMOYtf8AGFNM" charset="UTF-8"></script><style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
{{--
    "{{ asset('css/bootstrap.min.css')}}" --}}
     <link href="{{ asset('css/connect.signin.css') }}" rel="stylesheet">
  </head>


  <body class="text-center">


<main class="form-signin w-100 m-auto">

    <form action="{{route('enregistrer')}}" method="post">
 @csrf
    <h1 class="h3 mb-3 fw-normal">Veuillez vous inscrire</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="NOM:">
      <label for="floatingInput">NOM:</label>

    </div><br>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="PRENOM:">
        <label for="floatingInput">PRENOM:</label>

      </div><br>
      <div class="form-floating">
        <input type="date" class="form-control" id="floatingInput" placeholder="DATE DE NAISSANCE:">
        <label for="floatingInput">DATE DE NAISSANCE:</label>

      </div><br>
      <div class="form-floating">
        <input type="tel" class="form-control" id="floatingInput" placeholder="PHONE">
        <label for="floatingInput">PHONE:</label>

      </div><br>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingPassword" placeholder="EMAIL:">
        <label for="floatingInput">EMAIL:</label>

      </div><br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="MOT DE PASSE">
      <label for="floatingInput">MOT DE PASSE:</label>
    </div><br>

    {{-- <input type="submit" value="Enregistrer" id=""> --}}

 <button class="w-100 btn btn-lg btn-primary" type="submit" value="Enregistrer">S'INSCRIRE</button>

  </form>
</main>

  </body>
</html>


