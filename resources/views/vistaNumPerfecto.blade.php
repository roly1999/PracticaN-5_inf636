<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Números Perfectos</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="container mx-auto bg-slate-200">
        <h1 class="text-5xl text-center font-bold underline">
            Determinar si un número es perfecto.
        </h1>
        <form action="{{ route('obtenerNumPerfecto') }}" method="post" class=" bg-green-200 p-5 text-2xl">
            @csrf
            <input type="number" name="n" min="1" max="100000" required value="6" class="m-5 border border-black">
            @error('n')
                <div>
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class=" border border-black rounded-xl font-bold">
                Verificar...
            </button>
        </form>
        @isset($res)
            <section class=" bg-violet-200 text-4xl text-center font-bold">
                El número {{ $n }} {{ $res }} Perfecto!!!
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