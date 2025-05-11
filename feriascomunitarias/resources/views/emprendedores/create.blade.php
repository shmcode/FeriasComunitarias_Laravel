@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Registrar Nuevo Emprendedor</h2>

<form id="emprendedorForm" action="{{ route('emprendedores.store') }}" method="POST">
  @csrf
  <div class="mb-4">
    <label class="block font-semibold mb-1">Nombre del Emprendedor:</label>
    <input type="text" name="nombre" value="{{ old('nombre') }}" class="w-full border px-4 py-2 rounded" required>
  </div>

  <div class="mb-4">
    <label class="block font-semibold mb-1">Teléfono:</label>
    <input type="text" name="telefono" value="{{ old('telefono') }}" class="w-full border px-4 py-2 rounded" required>
  </div>

  <div class="mb-4">
    <label class="block font-semibold mb-1">Rubro:</label>
    <input type="text" name="rubro" value="{{ old('rubro') }}" class="w-full border px-4 py-2 rounded" required>
  </div>

  <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
    Guardar
  </button>
</form>

<script>
document.getElementById('emprendedorForm').addEventListener('submit', function(e) {
  const nombre = document.querySelector('[name=nombre]').value.trim();
  const telefono = document.querySelector('[name=telefono]').value.trim();
  const rubro = document.querySelector('[name=rubro]').value.trim();

  if (!nombre || !telefono || !rubro) {
    e.preventDefault();
    alert('Por favor completa todos los campos obligatorios.');
  }
});
</script>
@endsection