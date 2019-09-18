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
      <div class="flex flex-col justify-center h-full">
        <section class="h-64">
          probando
        </section>
        <section class="p-3 my-3">
          Seit mehreren Jahren arbeite ich nicht nur psychotherapeutisch in eigener Praxis, mit Menschen, die momentan das Gefühl haben, aus eigener Kraft eine Krise nicht bewältigen zu können, sondern auch präventiv, um weiteren Krisen vorzubeugen.
          Dabei ist mir in meiner therapeutischen Arbeit ein integrativer Ansatz wichtig. Neben meiner verhaltenstherapeutischen Ausbildung, bin ich ausgebildete Schematherapeutin.
          Fachlich arbeite ich überwiegend mit Patienten mit depressiven Symptomen, psychosomatischen Beschwerden, Burn-out oder Angststörungen.
        </section>
        <section class="h-full">
          probando 3
        </section>
      </div>
    </modal-component>
  </div>
</body>
</html>