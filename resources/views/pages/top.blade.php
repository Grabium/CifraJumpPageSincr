<!DOCTYPE html>
<!--html lang="{{ str_replace('_', '-', app()->getLocale()) }}"-->
<html>
  <head>
    <html lang="Pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="i-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app.css" >
    <title>Cifras Jump</title>
  </head>
  <body >
    <div id='div_show'><h1>CIFRAS-JUMP</h1>
    </div>


@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>    

  </body>
</html>