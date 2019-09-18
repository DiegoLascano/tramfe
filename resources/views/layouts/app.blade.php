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
        <nav-bar></nav-bar>
        <section class="cover">
            <div class="min-h-screen flex flex-col sm:flex-row items-center justify-between layer">
                <div>
                    <p>
                        Aqui va la foto
                    </p>
                </div>
                <div>
                    <p>TRAMFE</p>
                    <p>Telerehabilitación de la Atención, Memoria y Funciones Ejecutivas</p>
                </div>
            </div>
        </section>
        <section id="concept" class="panel" data-color="grey-050">
            <div class="w-4/5 mx-auto container-1200">
                <div class="section-title">
                    Concepto
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="text-gradient text-3xl md:text-4xl lg:text-5xl font-semibold text-center md:w-3/5 md:p-4">
                        Telerehabilitación de Atención, Memoria y Funciones Ejecutivas
                    </div>
                    <div class="text-cool-grey-600 text-xl md:w-2/5 mt-10 md:mt-0"> 
                        Lorem ipsum dolor sit amet consectetur adipiscing, elit fringilla nullam velit lacus at, tempus nunc vel posuere lectus, lobortis scelerisque maecenas vivamus semper. Magnis egestas nisl id pharetra praesent lacus, curabitur porta condimentum habitasse bibendum gravida lectus, iaculis libero dignissim congue eleifend. Praesent erat nascetur lacinia faucibus mi, vehicula interdum vel justo quam gravida, pellentesque vivamus ultricies phasellus.
                    </div>
                </div>
            </div>
        </section>
        <section id="profile" class="panel min-h-screen" data-color="gradient">
            <div class="section-title text-cool-grey-050">
                Perfil
            </div>
        </section>
        <section id="services" class="panel flex-1 text-center" data-color="grey-050">
            <div class="inline-block container-1200 w-4/5">
                <div class="section-title">Servicios</div>
                <div class="flex flex-col sm:flex-row flex-wrap -mx-3">
                    <service-card>Psicología Clínica</service-card>
                    <service-card>Rehabilitación Neuropsicológica</service-card>
                    <service-card>Estimulación Cognitiva</service-card>
                    <service-card>Psicoeducación</service-card>
                    <service-card>Telerehabilitacion</service-card>
                    <service-card>Capacitación</service-card>
                </div>
            </div>
        </section>
        <section id="platform-gnpt" class="panel min-h-screen" data-color="gradient">
            <div class="section-title text-cool-grey-050">
                Plataforma GNPT
            </div>
        </section>
        <section id="contact" class="panel container-800 w-4/5 mx-auto" data-color="grey-050">
            <contact-form></contact-form>
        </section>
        <div class="footer">
            <footer-panel></footer-panel>
        </div>
    </div>
</body>
</html>