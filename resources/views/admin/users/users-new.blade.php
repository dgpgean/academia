

@vite('resources/css/app.css')


@extends('adminlte::page')

@section('title', 'Cadastro de Aluno')

@section('content_header')
<h1>Cadastro de Aluno</h1>
@stop

@section('content')
<form action="">
    @include('admin.users.partials.form')
</form>
@stop



@section('js')
    <script src="{{asset('js/mask.js')}}"></script>
    <script>
        $('.date').mask('00/00/0000');
        $('.cep').mask('00000-000');
        $('.phone').mask('(00) 00000-0000');
    </script>
@stop
