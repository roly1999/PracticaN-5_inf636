<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Número de palabras</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <section class="container mx-auto bg-slate-200">
            <h1 class="text-5xl text-center font-bold underline">
                Determinar el número de palabras de una cadena
            </h1>
            <form action="{{ route('obtenerPalabras') }}" method="post" class=" bg-green-200 p-5 text-2xl grid grid-cols-1 items-center">
                @csrf
                <input type="text" name="cad" required class="m-4 border border-black w-full">
                @error('cad')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <div class=" m-5 ">
                    <button type="submit" class=" border text-center border-black rounded-xl font-bold ">
                        Calcular...
                    </button>
                </div>
            </form>
            @isset($cant)
                <section class="bg-violet-200 text-xl text-center">
                    El número de palabras de la cadena <br>"{{ $cad }}"<br> es:  {{ $cant }} 
                </section>
            @endisset
            <div class="grid items-end bg-red-100">
                <a href="{{ route('welcome') }}" class=" bg-red-100 w-52 text-center text-xl border border-black rounded-xl justify-self-end">
                    Volver a inicio
                </a>
            </div>
        </section>
    </body>
</html>