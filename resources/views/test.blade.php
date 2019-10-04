<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRAMFE</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="bg-cool-grey-100">
    <div id="app">
        <svg class="absolute z-0">
          <defs>
              <linearGradient x1="0%" y1="0%" x2="100%" y2="200%" id="Gradient1" >
                  <stop offset="10%" class="gradient-10"/>
                  <stop offset="30%" class="gradient-30"/>
                  <stop offset="100%" class="gradient-100"/>
              </linearGradient>
          </defs>
        </svg>
        <inline-svg name="logo-valeria" classes="h-40 w-40"></inline-svg>
        {{-- <section id="platform-gnpt" class="panel min-h-screen" data-color="gradient">
            <plataforma-section></plataforma-section>
        </section> --}}
  </div>
</body>
</html>