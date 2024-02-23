@vite('resources/css/app.css')
@vite('resources/js/users.js')

@extends('adminlte::page')


@section('title', 'Cadastro de Aluno')


@section('content_header')



@stop

@section('content')

    <!-- Default theme -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div id="container" class="h-full">
        <div class="container pt-8 pb-3 px-3 sessionColor1 text-[#ffffffeb]">
            <h2 class="font-black text-white">Força Diária</h2>
            <ul class="flex justify-between">
                <li class="flex flex-col items-center font-semibold">
                    <span>seg</span>
                    <span id="seg" class="rounded-3xl flex justify-center p-[3px] w-[30px]">0</span>
                </li>
                <li class="flex flex-col items-center">
                    <span>ter</span>
                    <span id="ter" class="rounded-3xl flex justify-center p-[3px] w-[30px]">01</span>
                </li>
                <li class="flex flex-col items-center">
                    <span>qua</span>
                    <span id="qua" class="rounded-3xl flex justify-center p-[3px] w-[30px]">01</span>
                </li>
                <li class="flex flex-col items-center">
                    <span>qui</span>
                    <span id="qui" class="rounded-3xl flex justify-center p-[3px] w-[30px]">01</span>
                </li>
                <li class="flex flex-col items-center">
                    <span>sex</span>
                    <span id="sex" class="rounded-3xl flex justify-center p-[3px] w-[30px]">01</span>
                </li>
                <li class="flex flex-col items-center">
                    <span>sab</span>
                    <span id="sab" class="rounded-3xl flex justify-center p-[3px] w-[30px]">01</span>
                </li>
                <li class="flex flex-col items-center">
                    <span>dom</span>
                    <span id="dom" class="rounded-3xl flex justify-center p-[3px] w-[30px]">01</span>
                </li>
            </ul>
            <div class="flex justify-end">
                0/3 dias concluídos
            </div>
        </div>

        <section class="bg-[#605b81] text-white  container py-6 px-3 h-[100%]">
            <h4 class="font-semibold text-[18px]">Meus Treinos</h4>

            <div class="cards flex flex-col gap-5 pb-6">
                <div data-id="2" class="single-card-workout rounded-md bg-[#8580A6] flex flex-row w-full p-3 gap-4">
                    <span class="border bg-[#524D73] rounded-full w-[60px] flex justify-center items-center">1</span>
                    <div class="flex flex-col w-full">
                        <span class="text-white font-semibold">Treino A</span>
                        <span class="text-[#ffffffeb]">3 exercícios</span>
                    </div>
                </div>

                <div data-id="2" class="single-card-workout rounded-md bg-[#8580A6] flex flex-row w-full p-3 gap-4">
                    <span class="border bg-[#524D73] rounded-full w-[60px] flex justify-center items-center">1</span>
                    <div class="flex flex-col w-full">
                        <span class="text-white font-semibold">Treino A</span>
                        <span class="text-[#ffffffeb]">3 exercícios</span>
                    </div>
                </div>

                <div data-id="2" class="single-card-workout rounded-md bg-[#8580A6] flex flex-row w-full p-3 gap-4">
                    <span class="border bg-[#524D73] rounded-full w-[60px] flex justify-center items-center">1</span>
                    <div class="flex flex-col w-full">
                        <span class="text-white font-semibold">Treino A</span>
                        <span class="text-[#ffffffeb]">3 exercícios</span>
                    </div>
                </div>
            </div>

            <h4 class="font-semibold text-[18px]">Começar Treino do dia</h4>
            <div data-id="2" class="single-card-workout rounded-md bg-[#8580A6] flex flex-row w-full p-3 gap-4">
                <span class="border bg-[#524D73] rounded-full w-[60px] flex justify-center items-center">1</span>
                <div class="flex flex-col w-full">
                    <span class="text-white font-semibold">Treino A</span>
                    <span class="text-[#ffffffeb]">3 exercícios</span>
                </div>
            </div>
        </section>

    </div>

    <div id="menu" class="bg-[#002333] p-3  w-full flex justify-around fixed left-0 bottom-0">
        <i id="btn" class="fa-solid fa-house text-3xl text-white"></i>
        <i id="btn2" class="fa-solid fa-house text-3xl text-white"></i>
        <i class="fa-solid fa-house text-3xl text-white"></i>
    </div>


@stop



@section('js')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css" />
    <!-- Add jQuery library (required) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <!-- Add the evo-calendar.js for.. obviously, functionality! -->
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

    <script src="{{ asset('js/mask.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>

    <script>
        list = document.querySelectorAll('.single-card-workout')
        list.forEach(item => {
            item.addEventListener('click', () => {
                atribute = item.getAttribute('data-id')
                requestRoute(`/views/workoutSingle/${atribute}`)
            })
        })
    </script>




@stop
