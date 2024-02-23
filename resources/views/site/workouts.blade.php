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


<script>
    list = document.querySelectorAll('.single-card-workout')
    list.forEach(item => {
        item.addEventListener('click', () => {
            atribute = item.getAttribute('data-id')
            requestRoute(`/views/workoutSingle/${atribute}`)
        })
    })
</script>
