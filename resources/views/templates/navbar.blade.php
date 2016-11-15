<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" 
          aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=" {{ URL::route('home') }}">{{ $app_nombre }}</a>
    </div>


 <!-- Nav-body -->
        <div class="collapse navbar-collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right">

            @if (  Auth::guest() )

             <li><a href="{{ URL::route('login') }} ">{{ trans('navbar.btn_login') }}</a></li>
             <li><a href="{{ URL::route('registro') }} ">{{ trans('navbar.btn_registro') }}</a></li>

            @else
              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user"></i> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                 <li>  <a href="{{ URL::route('salir') }} ">{{ trans('navbar.btn_logout') }}</a></li>
                </ul>
              </li>

            @endif 
          </ul>
        </div>

  </div><!-- /.container-fluid -->

</nav>