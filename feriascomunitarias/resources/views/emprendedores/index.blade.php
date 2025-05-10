@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold">Listado de Emprendedores</h2>
        <a href="{{ route('emprendedores.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Nuevo Emprendedor</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-blue-300 text-left">
        <thead class="bg-blue-200">
            <tr>
                <th class="px-4 py-2 border">Nombre</th>
                <th class="px-4 py-2 border">Teléfono</th>
                <th class="px-4 py-2 border">Rubro</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($emprendedores as $emprendedor)
                <tr class="hover:bg-blue-50">
                    <td class="px-4 py-2 border">{{ $emprendedor->nombre }}</td>
                    <td class="px-4 py-2 border">{{ $emprendedor->telefono }}</td>
                    <td class="px-4 py-2 border">{{ $emprendedor->rubro }}</td>
                    <td class="px-4 py-2 border space-x-2">
                        <a href="{{ route('emprendedores.edit', $emprendedor) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Editar</a>
                        <form action="{{ route('emprendedores.destroy', $emprendedor) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('¿Eliminar este emprendedor?')"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-4 text-center text-gray-500">No hay emprendedores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection