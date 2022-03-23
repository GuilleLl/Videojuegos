@extends("layouts.app")

@section("content")
    <div class="flex justify-center flex-wrap mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de juegos") }}</h1>
        </div>
    </div>

    <table class="border-separate border-2 text-center border-gray-500 p-5" style="width: 100%">
        <thead>
        <tr>
            <th class="px-4 py-2">{{ __("Nombre") }}</th>
            <th class="px-4 py-2">{{ __("Descripcion") }}</th>
            <th class="px-4 py-2">{{ __("Genero") }}</th>
            <th class="px-4 py-2">{{ __("Fecha_salida") }}</th>
            <th class="px-4 py-2">{{ __("Valoracion") }}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($juegos as $juego)
                <tr>
                    <td class="border px-4 py-2">{{ $juego->Nombre }}</td>
                    <td class="border px-4 py-2">{{ $juego->Descripcion }}</td>
                    <td class="border px-4 py-2">{{ $juego->Genero }}</td>
                    <td class="border px-4 py-2">{{ $juego->Fecha_salida }}</td>
                    <td class="border px-4 py-2">{{ $juego->Valoracion }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay juegos") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
 
  @if($juegos->count())
        <div class="mt-3">
            {{ $juegos->links() }}
           
        </div>
    @endif

@endsection
