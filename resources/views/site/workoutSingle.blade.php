<div class="container pt-2 bg-[#605b81] h-full text-white" id="container">

    <img onclick="backRoute()" class="w-9 " src="{{ asset('icons/back_arrow.png') }}" alt="" />
    <div class="cards pt-2 flex flex-col gap-3">
        <div class="single-exercise flex gap-3 bg-[#8580A6] rounded-md">
            <div class="p-2 bg-white rounded-l-md">
                <img class="w-16" src="{{ asset('icons/thumb_peso.jpg') }}" alt="">
            </div>
            <div>
                <p class="font-semibold text-lg">Nome do Treino</p>
                <p>séries</p>
            </div>
        </div>

        <div class="single-exercise flex gap-3 bg-[#8580A6] rounded-md">
            <div class="p-2 bg-white rounded-l-md">
                <img class="w-16" src="{{ asset('icons/thumb_peso.jpg') }}" alt="">
            </div>
            <div>
                <p class="font-semibold text-lg">Nome do Treino</p>
                <p>séries</p>
            </div>
        </div>

        <div class="single-exercise flex gap-3 bg-[#8580A6] rounded-md">
            <div class="p-2 bg-white rounded-l-md">
                <img class="w-16" src="{{ asset('icons/thumb_peso.jpg') }}" alt="">
            </div>
            <div>
                <p class="font-semibold text-lg">Nome do Treino</p>
                <p>séries</p>
            </div>
        </div>

        <div class="single-exercise flex gap-3 bg-[#8580A6] rounded-md">
            <div class="p-2 bg-white rounded-l-md">
                <img class="w-16" src="{{ asset('icons/thumb_peso.jpg') }}" alt="">
            </div>
            <div>
                <p class="font-semibold text-lg">Nome do Treino</p>
                <p>séries</p>
            </div>
        </div>

        <div class="single-exercise flex gap-3 bg-[#8580A6] rounded-md">
            <div class="p-2 bg-white rounded-l-md">
                <img class="w-16" src="{{ asset('icons/thumb_peso.jpg') }}" alt="">
            </div>
            <div>
                <p class="font-semibold text-lg">Nome do Treino</p>
                <p>séries</p>
            </div>
        </div>
    </div>
</div>

<script>
    list = document.querySelectorAll('.single-exercise')
    list.forEach(item => {
        item.addEventListener('click', () => {
            atribute = item.getAttribute('data-id')
            requestRoute(`/views/exerciseSingle/${atribute}`)
        })
    })
</script>
