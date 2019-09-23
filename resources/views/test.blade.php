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
  <body>
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
      <inline-svg name="icon-brain" classes="fill-current h-16 w-16" class="text-cyan-600"></inline-svg>
      <inline-svg name="icon-brain2" classes="fill-current h-16 w-16" class="text-cyan-600"></inline-svg>
      <inline-svg name="icon-edu" classes="primary h-16 w-16" class="text-cyan-600"></inline-svg>
      <inline-svg name="icon-brain4" classes="primary h-16 w-16" class="text-cyan-600"></inline-svg>
      <inline-svg name="icon-user-group" classes="h-16 w-16" class="text-cyan-600"></inline-svg>
      <inline-svg name="icon-remote" classes="primary h-16 w-16" class="text-cyan-600"></inline-svg>
      <inline-svg name="icon-remote-2" classes="primary h-16 w-16" class="text-cyan-600"></inline-svg>
  </div>
</body>
</html>