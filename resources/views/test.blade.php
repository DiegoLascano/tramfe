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
    <button-component event-name="toggle"></button-component>
    <modal-component event-name="toggle">
      <div class="h-full overflow-auto flex flex-col sm:rounded-2xl" id="modal">
        <section id="modal-cover" class="h-auto px-2 py-20 cover">
          <div class="container-800 mx-auto w-4/5 md:w-full">
            <p class="text-2xl md:text-4xl text-center md:max-w-lg lg:max-w-xl mx-auto">
              Hola, mi nombre es Valeria Valladares. Fachlich arbeite ich überwiegend mit Patienten mit depressiven Symptomen, psychosomatischen Beschwerden, Burn-out oder Angststörungen.
            </p>
          </div>
        </section>
        <section id="modal-intro" class="modal-section" data-color="grey-050">
          <div class="section-title">
              Concepto
          </div>
          <div class="text-xl text-cool-grey-600 w-5/6 md:w-2/3 py-8 my-8 mx-auto">
            Seit mehreren Jahren arbeite ich nicht nur psychotherapeutisch in eigener Praxis, mit Menschen, die momentan das Gefühl haben, aus eigener Kraft eine Krise nicht bewältigen zu können, sondern auch präventiv, um weiteren Krisen vorzubeugen.
            Dabei ist mir in meiner therapeutischen Arbeit ein integrativer Ansatz wichtig. Neben meiner verhaltenstherapeutischen Ausbildung, bin ich ausgebildete Schematherapeutin.
            Fachlich arbeite ich überwiegend mit Patienten mit depressiven Symptomen, psychosomatischen Beschwerden, Burn-out oder Angststörungen.
          </div>
        </section>
        <section id="modal-detail" class="modal-section container-1200 w-full mx-auto" data-color="gradient">
          <div class="section-title text-cool-grey-050">
              Experiencia
          </div>
          <div class="flex flex-col w-5/6 mx-auto">
            <div class="md:w-1/2 text-cool-grey-600 text-center text-lg my-10 md:self-start max-w-lg">
              Seit mehreren Jahren arbeite ich nicht nur psychotherapeutisch in eigener Praxis, mit Menschen, die momentan das Gefühl haben, aus eigener Kraft eine Krise nicht bewältigen zu können, sondern auch präventiv, um weiteren Krisen vorzubeugen.
              Dabei ist mir in meiner therapeutischen Arbeit ein integrativer Ansatz wichtig. Neben meiner verhaltenstherapeutischen Ausbildung, bin ich ausgebildete Schematherapeutin.
              Fachlich arbeite ich überwiegend mit Patienten mit depressiven Symptomen, psychosomatischen Beschwerden, Burn-out oder Angststörungen.
            </div>
            <div class="md:w-1/2 text-cool-grey-600 text-center text-lg my-10 p-2 md:self-end max-w-lg">
              Seit mehreren Jahren arbeite ich nicht nur psychotherapeutisch in eigener Praxis, mit Menschen, die momentan das Gefühl haben, aus eigener Kraft eine Krise nicht bewältigen zu können, sondern auch präventiv, um weiteren Krisen vorzubeugen.
              Dabei ist mir in meiner therapeutischen Arbeit ein integrativer Ansatz wichtig. Neben meiner verhaltenstherapeutischen Ausbildung, bin ich ausgebildete Schematherapeutin.
              Fachlich arbeite ich überwiegend mit Patienten mit depressiven Symptomen, psychosomatischen Beschwerden, Burn-out oder Angststörungen.
            </div>
          </div>
        </section>
        <section id="modal-contact" class="modal-section container-1200 w-full mx-auto" data-color="grey-050">
          <div class="section-title  text-cool-grey-600">
              Contacto Personal
          </div>
          <div class="flex flex-col w-5/6 mx-auto">
            <p class="md:w-1/2 text-cool-grey-600 text-center text-2xl my-10 max-w-lg mx-auto">
              Dejame saber en que te puedo ayudar, y me podré en contacto lo antes posible.
            </p>
            <div class="flex flex-col items-center py-8">
              <a href="mailto:vmvalladaresvelin@gmail.com" class="btn btn-primary rounded-full py-2 px-8 text-cyan-050 tracking-widest text-lg">vmvalladaresvelin@gmail.com</a>
            </div>
            <div class="flex flex-col items-center py-8">
              <a href="tel:+593987120499" class="flex flex-col items-center text-cool-grey-600 text-lg tracking-wide">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-device-smartphone h-12 w-12 my-2">
                  <linearGradient x1="0%" y1="0%" x2="100%" y2="200%" id="Gradient1" >
                    <stop offset="10%" class="gradient-10"/>
                    <stop offset="30%" class="gradient-30"/>
                    <stop offset="100%" class="gradient-100"/>
                  </linearGradient>
                  <path class="primary" d="M8 2h8a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2z"/>
                  <path class="secondary" d="M12 20a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
              (+593) 987 120 499
            </a>
            </div>
          </div>
        </section>
      </div>
    </modal-component>
  </div>
</body>
</html>