<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Práctica Nº5 de Rolando Churata</title>
        @vite('resources/css/app.css')
    </head>

    <body class=" bg-violet-100 ">
        <section class="bg-green-200 h-4/5 w-4/5 grid justify-items-center p-10 ">
            <h1 class="text-5xl font-bold underline text-center">
                Práctica Nº5 INF-636
            </h1>
            <div class=" grid grid-cols-4">
                <a href="{{ route('fibonacci') }}" class=" bg-violet-300 m-5 text-3xl border border-black rounded-xl text-center">
                    Serie Fibonacci
                </a>
                <a href="{{ route('palabras') }}" class=" bg-violet-300 m-5 text-3xl border border-black rounded-xl text-center">
                    Cantidad de palabras
                </a>
                <a href="{{ route('vocales') }}" class=" bg-violet-300 m-5 text-3xl border border-black rounded-xl text-center">
                    Cantidad de Vocales
                </a>
                <a href="{{ route('numPerfecto') }}" class=" bg-violet-300 m-5 text-3xl border border-black rounded-xl text-center">
                    Número Perfecto
                </a>
            </div>
            <div class="justify-self-end">   
                <h1 class="text-xl font-bold m-5">
                    Univ. Rolando Churata Pavia
                </h1>
            </div>
        </section>
    </body>

</html>
