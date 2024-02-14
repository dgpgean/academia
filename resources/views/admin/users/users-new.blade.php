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
    <form action="{{ route('users_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.users.partials.form')
    </form>
@stop



@section('js')
    <script src="{{ asset('js/mask.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>

@stop
