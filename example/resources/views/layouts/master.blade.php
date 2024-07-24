<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            box-sizing: border-box;
        }
    </style>
    @yield('css')
    @stack('style')
  </head>
  <body>
    @include('layouts.sidebar')

    <div id="navBar" class="animation d-flex align-items-center justify-content-between position-absolute top-0 left-0 bg-warning" style="height: 10%;  width: calc(100% - 280px); right:0px;transition : width 0.5s linear;">
        <div class="px-2">
            <button class="btn btn-primary" onclick="toggleMenu()">+</button>
        </div>
        <div>
            <h2>Login</h2>
        </div>
    </div>
   <div id="content" class="position-absolute" style="right: 0; width: calc(100% - 280px); top: 10%;transition : width 0.5s linear;">
    <div class="containe">
       <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
       </div>
    </div>
   </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function toggleMenu(){
            console.log(document.getElementById('sideBar').style.left);
            if(document.getElementById('sideBar').style.left == '0%'){
                document.getElementById('sideBar').style.left = "-100%"
                document.getElementById('navBar').style.width = "100%";
                document.getElementById('content').style.width = "100%";
                document.getElementById('sideBar').style.transition  = "left 2.3s linear";
                document.getElementById('navBar').style.transition  = " width 0.5s linear";
                document.getElementById('content').style.transition  = " width 0.5s linear";
            } else {
                document.getElementById('sideBar').style.left = "0%"
                document.getElementById('navBar').style.width = "calc(100% - 280px)";
                document.getElementById('content').style.width = "calc(100% - 280px)";
                document.getElementById('sideBar').style.transition  = "";
                document.getElementById('navBar').style.transition  = "";
                document.getElementById('content').style.transition  = "";
            }
        }
    </script>
    @yield('js')
  </body>
</html>