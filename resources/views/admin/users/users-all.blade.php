@vite('resources/css/app.css')
@vite('resources/js/users.js')


@extends('adminlte::page')

@section('title', 'Cadastro de Aluno')

@section('content_header')
    <h1>Lista de Alunos</h1>
@stop

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('content')
    <form action="{{ route('users_all') }}" class="w-full flex gap-3 border shadow-md p-4 rounded-sm mb-4" method="GET">
        <input value="{{ app('request')->input('filter') ?? '' }}" name="filter" class="w-full rounded-sm" type="text"
            placeholder="Procure por nome, telefone ou e-mail">
        <select name="status" class="rounded-sm bg-white shadow-sm">
            <option value="1">Ativo</option>
            <option value="0">Desativado</option>
        </select>
        <button type="submit" id="search" class="w-full bg-blue-300 flex-1 py-2 text-white  px-5">Buscar</button>
    </form>

    <table class="w-full ">
        <thead>
            <tr>
                <th class="p-3">ID</th>
                <th class="p-3">NOME</th>
                <th class="p-3">E-MAIL</th>
                <th class="p-3">TELEFONE</th>
                <th class="p-3">STATUS</th>
                <th class="p-3"></th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($users as $user)
                <tr>
                    <td class="p-3">{{ $user->id }}</td>
                    <td class="p-3">{{ $user->name }}</td>
                    <td class="p-3">{{ $user->email }}</td>
                    <td class="p-3">{{ $user->phone }}</td>
                    <td class="p-3">{{ $user->status }}</td>
                    <td class="p-3"><a href="{{ route('users_edit', $user->id) }}">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2">
        {{ $users->links() }}
    </div>
@stop



@section('js')
    <script src="{{ asset('js/mask.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>

@stop
