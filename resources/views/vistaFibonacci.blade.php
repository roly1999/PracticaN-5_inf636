<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fibonacci</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="container mx-auto bg-slate-200">
        <h1 class="text-5xl text-center font-bold underline">
            Mostrar los n primeros números de la serie de Fibonacci
        </h1>
        <form action="{{ route('obtenerFibonacci') }}" method="post" class=" bg-green-200 p-5 text-2xl">
            @csrf
            <input type="number" name="n" min="1" max="100" required value="1" class="m-5 border border-black">
            @error('n')
                <div>
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class=" border border-black rounded-xl font-bold">
                Generar
            </button>
        </form>
        @isset($serie)
            <section class=" bg-violet-200 text-xl text-center">
                Los {{ $n }} primeros números de las serie fibonacci son: <br>| {{ $serie }} |
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