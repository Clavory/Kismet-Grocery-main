@extends('layouts.app')
@section('Title', 'About Us')
@section('content')
<html>
    <title>About Kismet Grocery</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <style>
        body {
            font-family: 'Nostalgia', sans-serif;
        }
        img[alt="avatar"]{
            width: 250px;
        }
        img[alt="logo"]{
            margin-top: 30px;
        }

    </style>
    <body>
              <div class="container">
                <div class="row">
                  <div class="text-center"><img src="/images/Nath.png" alt="avatar" width="100" class="img-thumbnail">
                    <h5 class="mb-0">Allapitan, Nathaniel</h5><span class="small text-uppercase text-muted">Developer</span>
                  </div>
                </div>
                
                <div class="row">
                  <div class="text-center"><img src="/images/Jesel.png" alt="avatar" width="100" class="img-thumbnail">
                    <h5 class="mb-0">De Jesus, Jesel</h5><span class="small text-uppercase text-muted">Developer</span>
                  </div>
                </div>
                
                <div class="row">
                  <div class="text-center"><img src="/images/Scott.png" alt="avatar" width="100" class="img-thumbnail">
                    <h5 class="mb-0">Galang, Scott</h5><span class="small text-uppercase text-muted">Developer</span>
                  </div>
                </div>

                <h1 class="text-center"><img src="/images/Kismet.png" width="100" alt="logo"></img></h1>


                 <footer class="bg-light pb-5">
                 <div class="container text-center">
                 <p class="font-italic text-muted mb-0">&copy; Copyrights Kismet Grocery All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
@endsection