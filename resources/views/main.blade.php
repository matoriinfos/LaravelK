<!DOCTYPE html>
<html lang="en">
  <head>
  @include('delovi._head')
  </head>

  <body>

  @include('delovi._nav')
          
  <div class = "container">

  @include('delovi._poruke')
    @yield('content')  
    @include('delovi._futer')     
  </div>    
  @include('delovi._javascript')
     
  </body>
</html>