<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Ferias Comunitarias')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="flex flex-col min-h-screen">
  <nav class="py-8 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <a href="{{ url('/') }}" class="flex items-center text-3xl font-bold">
        <img src="{{ asset('img/market-square.png') }}" alt="Market Square Icon" class="h-8 w-8 mr-2">
        Ferias Comunitarias
      </a>
      <div class="flex space-x-4">
        <a href="{{ route('ferias.index') }}" class="hover:underline text-xl">Consultar Ferias</a>
        <a href="{{ route('ferias.create') }}" class="hover:underline text-xl">Registrar Feria</a>
        <a href="{{ route('emprendedores.create') }}" class="hover:underline text-xl">Registrar Emprendedor</a>
      </div>
    </div>
  </nav>

  <main class="container mx-auto mt-10 flex-grow">
    @yield('content')
  </main>

</body>

</html>