@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Novo Livro</h1>

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Título:</label>
            <input type="text" name="titulo" value="{{ old('titulo') }}" class="w-full rounded border px-3 py-2">
            @error('titulo')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">Ano de Publicação:</label>
            <input type="number" name="ano_publicacao" value="{{ old('ano_publicacao') }}" class="w-full rounded border px-3 py-2">
            @error('ano_publicacao')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">ISBN:</label>
            <input type="text" name="isbn" value="{{ old('isbn') }}" class="w-full rounded border px-3 py-2">
            @error('isbn')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">Autor:</label>
            <select name="autor_id" class="w-full rounded border px-3 py-2">
                <option value="">Selecione um autor</option>
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{ old('autor_id') == $autor->id ? 'selected' : '' }}>
                        {{ $autor->nome }}
                    </option>
                @endforeach
            </select>
            @error('autor_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
            <a href="{{ route('livros.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Voltar</a>
        </div>
    </form>
</div>
@endsection