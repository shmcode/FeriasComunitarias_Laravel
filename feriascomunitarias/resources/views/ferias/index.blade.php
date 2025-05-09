@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold">Listado de Ferias</h2>
        <a href="{{ route('ferias.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Nueva Feria</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-300 text-left">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 border">Nombre</th>
                <th class="px-4 py-2 border">Fecha</th>
                <th class="px-4 py-2 border">Dirección</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ferias as $feria)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $feria->nombre }}</td>
                    <td class="px-4 py-2 border">{{ $feria->fecha_evento }}</td>
                    <td class="px-4 py-2 border">{{ $feria->direccion }}</td>
                    <td class="px-4 py-2 border space-x-2">
                        <a href="{{ route('ferias.edit', $feria) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Editar</a>
                        <form action="{{ route('ferias.destroy', $feria) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('¿Eliminar esta feria?')"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-4 text-center text-gray-500">No hay ferias registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
