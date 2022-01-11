<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>JABM-Contratos</title>

    @include('layouts.partials.styles')
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
            @include('layouts.partials.sidebar')
            @include('layouts.partials.nav')

      
        @yield('content')


        @include('layouts.partials.footer')
      </div>
    </div>
    @include('layouts.partials.scripts')
  </body>
</html>
