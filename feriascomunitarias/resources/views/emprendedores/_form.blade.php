@csrf
<div class="mb-4">
  <label class="block font-semibold mb-1">Nombre del Emprendedor:</label>
  <input type="text" name="nombre" value="{{ old('nombre', $emprendedor->nombre ?? '') }}"
    class="w-full border px-4 py-2 rounded" required>
</div>

<div class="mb-4">
  <label class="block font-semibold mb-1">Teléfono:</label>
  <input type="text" name="telefono" value="{{ old('telefono', $emprendedor->telefono ?? '') }}"
    class="w-full border px-4 py-2 rounded" required>
</div>

<div class="mb-4">
  <label class="block font-semibold mb-1">Rubro:</label>
  <input type="text" name="rubro" value="{{ old('rubro', $emprendedor->rubro ?? '') }}"
    class="w-full border px-4 py-2 rounded" required>
</div>

<button type="submit"
  class=" font-bold bg-black text-white px-4 py-2 rounded hover:bg-white hover:text-black hover:border-black border w-full text-center mb-12">
  Guardar
</button>