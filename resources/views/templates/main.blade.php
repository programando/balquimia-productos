<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>
        @if ( Route::currentRouteName()=='home' )
            {{ $app_nombre }}  | {{ $app_descripcion }}
         @else
            {{ $app_titulo }}  | {{ $app_descripcion }}
        @endif
 
    </title>

       @include('templates/main_css')  <!-- Estilos  --> 
       @include('templates/main_iexplorer')      <!-- IExplorer  -->
 
  </head>
  <body>
   @include('templates/navbar')
   
      <div class="container">
          
          @include ('templates/alerts')

          @if ( View::hasSection('body'))
            <div class="content-body">
              @yield('body')
            </div>
          @endif
      </div>

      @include ('templates/main_js') <!-- Archivos Js  --> 
  </body>
</html>




 