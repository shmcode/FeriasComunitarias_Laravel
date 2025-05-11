<!-- Welcome Dashboard para Ferias Comunitarias -->
@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="w-full h-96 flex items-center bg-gray-50 mb-8 rounded-lg shadow-md">
  <div class="w-1/2 h-full">
    <img class="w-full h-full object-fill" src="{{ asset('img/collage.svg') }}" alt="Collage Image">
  </div>

  <div class="w-1/2 h-full flex flex-col justify-center items-center text-center px-8">
    <h2 class="text-3xl font-bold mb-4">¡EMPRENDER nunca había sido tan fácil!</h2>
    <p class="text-gray-600 text-lg">
      Conocé y registra ferias comunitarias de emprendedores locales que ofrecen productos y servicios únicos.
    </p>
  </div>
</div>

<div class="mb-8 grid grid-cols-1 md:grid-cols-2 gap-8">
  <div class="bg-white rounded-lg p-6 ">
    <h3 class="text-2xl font-bold text-center">¿Sos Host de una Feria Comunitaria?</h3>
    <img src="{{ asset('img/feria.png') }}" alt="Feria" class="w-50 h-50 mb-4 rounded-md my-6">


    <a href="{{ route('ferias.create') }}"
      class="h-auto font-bold inline-block bg-black text-white px-4 py-2 rounded hover:bg-white hover:text-black hover:border-black border w-full text-center">
      REGISTRAR FERIA
    </a>

    <p class="mt-2 text-gray-700 text-center m-4">
      Sumate al cambio y registra tu feria comunitaria para que más emprendedores se unan a ella.
      ¡Tu pasión nos mueve!
    </p>

  </div>

  <div class="bg-white rounded-lg p-6">
    <h3 class="text-2xl font-bold text-center">La <i>Chispa</i> del evento</h3>
    <img src="{{ asset('img/emprendedores.png') }}" alt="Feria" class="w-50 h-50 mb-4 rounded-md my-6">
    <a href="{{ route('emprendedores.create') }}"
      class="h-auto font-bold inline-block bg-black text-white px-4 py-2 rounded hover:bg-white hover:text-black hover:border-black border w-full text-center">
      REGISTRAR EMPRENDEDOR
    </a>
    <p class="mt-2 text-gray-700 text-center m-4">
      Te estamos buscando para que participes en las <i>mejores</i> ferias comunitarias de la ciudad.
      ¿Te atrevés?
    </p>

  </div>
</div>

<div class="mb-8">
  <h3 class="text-3xl font-bold mb-4">Próximas Ferias</h3>
  @forelse ($proximasFerias as $feria)
  <div class="bg-gray-50 rounded-lg p-6 m-4">
    <h4 class="text-lg font-bold">{{ $feria->nombre }}</h4>
    <p class="text-gray-800">Fecha: {{ \Carbon\Carbon::parse($feria->fecha_evento)->format('d/m/Y') }}</p>
    <p class="text-gray-800">Dirección: {{ $feria->direccion }}</p>
    <p class="text-gray-800">Acerca del Evento: {{ $feria->descripcion }}</p>
    <h5 class="font-bold font-bold mt-4">Emprendedores Registrados:</h5>
    <ul class="list-disc list-inside text-gray-800">
      @forelse ($feria->emprendedores as $emprendedor)
      <li>{{ $emprendedor->nombre }}</li>
      @empty
      <li>Aún no hay emprendimientos registrados.</li>
      @endforelse
    </ul>
  </div>
  @empty
  <p class="text-gray-800">Aún no hay registradas para los próximos días.</p>
  @endforelse
</div>
</div>

<footer class="bg-black text-white py-4 w-full">
  <div class="text-center">
    <p>&copy; {{ date('Y') }} Ferias Comunitarias</p>
  </div>
</footer>

@endsection