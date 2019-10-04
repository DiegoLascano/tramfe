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
    <div id="app" class="flex flex-col">
        <svg class="absolute z-0">
            <defs>
                <linearGradient x1="0%" y1="0%" x2="100%" y2="200%" id="Gradient1" >
                    <stop offset="10%" class="gradient-10"/>
                    <stop offset="30%" class="gradient-30"/>
                    <stop offset="100%" class="gradient-100"/>
                </linearGradient>
            </defs>
        </svg>
        <nav-bar></nav-bar>
        <section id="cover-section">
            <cover-section></cover-section>
        </section>
        <section id="concept" class="panel" data-color="grey-050">
            <div class="w-4/5 mx-auto container-1200">
                <div id="title" class="section-title">
                    TRAMFE
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="text-gradient font-semibold text-center md:w-3/5 md:p-4">
                        <p class="text-3xl md:text-4xl lg:text-5xl my-2 lg:px-2">
                            Telerehabilitación de la Atención, Memoria y Funciones Ejecutivas
                        </p>
                    </div>
                    <div class="text-cool-grey-600 md:w-2/5 mt-10 md:mt-0"> 
                        Gracias a la experiencia adquirida a nivel internacional, he aprendido acerca de la importancia de la tecnología e investigación. 
                        <p class="my-1">
                            En TRAMFE, mi compromiso es brindar un servicio de calidad y altamente eficiente, integrando las nuevas tendencias tecnológicas 
                            para el servicio de rehabilitación neuropsicológica y estimulación cognitiva.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="profile" class="panel" data-color="gradient">
            <div class="section-title text-cool-grey-050">
                Mi Perfil
            </div>
            <profile-section></profile-section>
            @include('partials.profile')
        </section>
        <section id="services" class="panel flex-1 text-center" data-color="grey-050">
            <div class="inline-block container-1200 w-4/5">
                <div class="section-title">Servicios</div>
                <services-section></services-section>
                @include('partials.services.psicologia-clinica')
                @include('partials.services.rehabilitacion-neuro')
                @include('partials.services.estimulacion-cognitiva')
                @include('partials.services.psico-educacion')
                @include('partials.services.tele-rehabilitacion')
                @include('partials.services.capacitacion')
            </div>
        </section>
        <testimonial-section class="mt-8"></testimonial-section>
        <section id="platform-gnpt" class="panel min-h-screen" data-color="gradient">
           <plataforma-section></plataforma-section>
        </section>
        <section id="contact" class="panel container-800 w-4/5 mx-auto" data-color="grey-050">
            <contact-form></contact-form>
        </section>

        <visible-component when-hidden="#cover-section"></visible-component>

        <div class="footer">
            <footer-section></footer-section>
        </div>
    </div>
</body>
</html>