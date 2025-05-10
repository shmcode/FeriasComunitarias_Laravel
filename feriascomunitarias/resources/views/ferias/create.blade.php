@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Registrar Nueva Feria</h2>

    <form id="feriaForm" action="{{ route('ferias.store') }}" method="POST">
        @include('ferias._form')
    </form>

    <script>
        document.getElementById('feriaForm').addEventListener('submit', function (e) {
            const nombre = document.querySelector('[name=nombre]').value.trim();
            const fecha = document.querySelector('[name=fecha_evento]').value;
            const direccion = document.querySelector('[name=direccion]').value.trim();

            if (!nombre || !fecha || !direccion) {
                e.preventDefault();
                alert('Por favor completa todos los campos obligatorios.');
            }
        });
    </script>
@endsection
