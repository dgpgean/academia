@vite('resources/css/app.css')
@vite('resources/js/users.js')


@extends('adminlte::page')

@section('title', 'Cadastro de Aluno')

@section('content_header')
    <h1>Cadastro de Aluno</h1>
    <input id="userStore" type="hidden" value="{{ route('users_store') }}">
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
    <form id="newUser" action="{{ isset($user) ? route('users_update') : route('users_store') }}"
        enctype="multipart/form-data" method="{{ isset($user) ? 'PUT' : 'POST' }}">
        @if (isset($user))
            <input type="hidden" value="{{ $user->id }}" name="id">
        @endif
        @csrf
        @include('admin.users.partials.form')
    </form>
@stop



@section('js')
    <script src="{{ asset('js/mask.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>

@stop
