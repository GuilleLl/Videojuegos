@extends("layouts.app")

@section("content")
    <div class="flex justify-center flex-wrap p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("PORTADAS") }}</h1>
        </div>
    </div>


        <tbody>
            <div class="">
                <div class="row d-flex justify-content-center">
            @forelse($juegos as $juego)
            <div class="card col-5 mx-3 mb-4 mt-4 row p-0 text-center bg-dark text-white">
					<div class="card-header class col-12 d-flex justify-content-center " ><img class="img-fluid  border p-0 " src="{{$juego->Imagen}}">
                    
                    </div>
                    <h2 class=" text-center col-12">{{ $juego->Nombre }}</h2>
                    <div class="card-body col-12 bg-orange-500 text-black">
						<p>{{ $juego->Descripcion }}
						</p>
					</div>
				</div>

            @empty
                <tr>
                    <td colspan="4">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay Juegos") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
                </div>
            </div>
        </tbody>

 
  @if($juegos->count())
        <div class="mt-3">
            {{ $juegos->links() }}
           
        </div>
    @endif

@endsection