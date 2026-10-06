@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Editar Autor</h1>

    <form action="{{ route('autores.update', $autor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $autor->nome) }}" class="w-full rounded border px-3 py-2">
            @error('nome')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">Nacionalidade:</label>
            <input type="text" name="nacionalidade" value="{{ old('nacionalidade', $autor->nacionalidade) }}" class="w-full rounded border px-3 py-2">
            @error('nacionalidade')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Atualizar</button>
            <a href="{{ route('autores.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Voltar</a>
        </div>
    </form>
</div>
@endsection