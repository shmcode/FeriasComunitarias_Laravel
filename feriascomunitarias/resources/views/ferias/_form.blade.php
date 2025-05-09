@csrf
<div class="mb-4">
    <label class="block font-semibold mb-1">Nombre de la feria:</label>
    <input type="text" name="nombre" value="{{ old('nombre', $feria->nombre ?? '') }}"
           class="w-full border px-4 py-2 rounded" required>
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1">Fecha del evento:</label>
    <input type="date" name="fecha_evento" value="{{ old('fecha_evento', $feria->fecha_evento ?? '') }}"
           class="w-full border px-4 py-2 rounded" required>
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1">Dirección:</label>
    <input type="text" name="direccion" value="{{ old('direccion', $feria->direccion ?? '') }}"
           class="w-full border px-4 py-2 rounded" required>
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1">Descripción:</label>
    <textarea name="descripcion" rows="4"
              class="w-full border px-4 py-2 rounded">{{ old('descripcion', $feria->descripcion ?? '') }}</textarea>
</div>

<button type="submit"
        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
    Guardar
</button>
